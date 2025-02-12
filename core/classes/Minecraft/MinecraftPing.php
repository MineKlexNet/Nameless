<?php
/*
The MIT License (MIT)

Copyright (c) 2015 Pavel Djundik

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

class MinecraftPingException extends Exception
{
    // Exception thrown by MinecraftPing class
}

class MinecraftPing {
    /*
     * Queries Minecraft server
     * Returns array on success, false on failure.
     *
     * WARNING: This method was added in snapshot 13w41a (Minecraft 1.7)
     *
     * Written by xPaw
     *
     * Website: http://xpaw.me
     * GitHub: https://github.com/xPaw/PHP-Minecraft-Query
     *
     * ---------
     *
     * This method can be used to get server-icon.png too.
     * Something like this:
     *
     * $Server = new MinecraftPing( 'localhost' );
     * $Info = $Server->Query();
     * echo '<img width="64" height="64" src="' . Str_Replace( "\n", "", $Info[ 'favicon' ] ) . '">';
     *
     */

    private $Socket;
    private string $ServerAddress;
    private int $ServerPort;
    private int $Timeout;

    public function __construct(string $Address, int $Port = 25565, int $Timeout = 2, bool $ResolveSRV = true) {
        $this->ServerAddress = $Address;
        $this->ServerPort = $Port;
        $this->Timeout = $Timeout;

        if ($ResolveSRV) {
            $this->ResolveSRV();
        }

        $this->Connect();
    }

    public function __destruct() {
        $this->Close();
    }

    public function Close(): void {
        if ($this->Socket !== null) {
            fclose($this->Socket);

            $this->Socket = null;
        }
    }

    public function Connect(): void {
        $connectTimeout = $this->Timeout;
        $this->Socket = @fsockopen($this->ServerAddress, $this->ServerPort, $errno, $errstr, $connectTimeout);

        if (!$this->Socket) {
            throw new Exception("Failed to connect or create a socket: $errno ($errstr)");
        }

        // Set Read/Write timeout
        stream_set_timeout($this->Socket, $this->Timeout);
    }

    public function Query() {
        $TimeStart = microtime(true); // for read timeout purposes

        // See http://wiki.vg/Protocol (Status Ping)
        $Data = "\x00"; // packet ID = 0 (varint)

        $Data .= "\x04"; // Protocol version (varint)
        $Data .= Pack('c', StrLen($this->ServerAddress)) . $this->ServerAddress; // Server (varint len + UTF-8 addr)
        $Data .= Pack('n', $this->ServerPort); // Server port (unsigned short)
        $Data .= "\x01"; // Next state: status (varint)

        $Data = Pack('c', StrLen($Data)) . $Data; // prepend length of packet ID + data

        fwrite($this->Socket, $Data . "\x01\x00" ); // handshake followed by status ping

        $Length = $this->ReadVarInt(); // full packet length

        if ($Length < 10) {
            return FALSE;
        }

        $this->ReadVarInt(); // packet type, in server ping it's 0

        $Length = $this->ReadVarInt(); // string length

        $Data = '';
        do {
            if (microtime(true) - $TimeStart > $this->Timeout) {
                throw new MinecraftPingException('Server read timed out');
            }

            $Remainder = $Length - StrLen($Data);
            $block = fread($this->Socket, $Remainder); // and finally the json string
            // abort if there is no progress
            if (!$block) {
                throw new MinecraftPingException('Server returned too few data');
            }

            $Data .= $block;
        } while (StrLen($Data) < $Length);

        if ($Data === FALSE) {
            throw new MinecraftPingException('Server didn\'t return any data');
        }

        $Data = JSON_Decode($Data, true);

        if (JSON_Last_Error() !== JSON_ERROR_NONE) {
            if (Function_Exists('json_last_error_msg')) {
                throw new MinecraftPingException(JSON_Last_Error_Msg());
            } else {
                throw new MinecraftPingException('JSON parsing failed');
            }
        }

        return $Data;
    }

    public function QueryOldPre17() {
        fwrite($this->Socket, "\xFE\x01");
        $Data = fread($this->Socket, 512);
        $Len = StrLen($Data);

        if ($Len < 4 || $Data[0] !== "\xFF") {
            return FALSE;
        }

        $Data = SubStr($Data, 3); // Strip packet header (kick message packet and short length)
        $Data = iconv('UTF-16BE', 'UTF-8', $Data);

        // Are we dealing with Minecraft 1.4+ server?
        if ($Data[1] === "\xA7" && $Data[2] === "\x31") {
            $Data = Explode("\x00", $Data);

            return [
                'HostName'   => $Data[3],
                'Players'    => IntVal($Data[4]),
                'MaxPlayers' => IntVal($Data[5]),
                'Protocol'   => IntVal($Data[1]),
                'Version'    => $Data[2]
            ];
        }

        $Data = Explode("\xA7", $Data);

        return [
            'HostName'   => SubStr($Data[0], 0, -1),
            'Players'    => isset($Data[1]) ? IntVal($Data[1]) : 0,
            'MaxPlayers' => isset($Data[2]) ? IntVal($Data[2]) : 0,
            'Protocol'   => 0,
            'Version'    => '1.3'
        ];
    }

    private function ReadVarInt(): int {
        $i = 0;
        $j = 0;

        while (true) {
            $k = @fgetc($this->Socket);

            if ($k === FALSE) {
                return 0;
            }

            $k = Ord($k);

            $i |= ($k & 0x7F) << $j++ * 7;

            if ($j > 5) {
                throw new MinecraftPingException('VarInt too big');
            }

            if (($k & 0x80) != 128) {
                break;
            }
        }

        return $i;
    }

    private function ResolveSRV(): void {
        if (ip2long($this->ServerAddress) !== false) {
            return;
        }

        $Record = dns_get_record('_minecraft._tcp.' . $this->ServerAddress, DNS_SRV);

        if (empty($Record)) {
            return;
        }

        if (isset($Record[0]['target'])) {
            $this->ServerAddress = $Record[0]['target'];
        }

        if (isset($Record[0]['port'])) {
            $this->ServerPort = $Record[0]['port'];
        }
    }
}
