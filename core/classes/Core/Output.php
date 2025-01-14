<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Output class
 */
class Output {

    private static HTMLPurifier $_purifier;

    /**
     * Returns a clean version of an inputted string.
     *
     * @param string|null $input The string which will be cleaned
     *
     * @return string Cleaned version of string.
     */
    public static function getClean(?string $input): string {
        return str_replace('&amp;', '&', htmlspecialchars($input, ENT_QUOTES));
    }

    /**
     * Returns a decoded version of a clean string.
     *
     * @param string|null $input Contains the clean string which will be decoded.
     *
     * @return string Decoded string.
     */
    public static function getDecoded(?string $input): string {
        return htmlspecialchars_decode($input, ENT_QUOTES);
    }

    /**
     * Returns a purified version of an inputted string with HTMLPurifier.
     *
     * @param string|null $input String which will be purified.
     * @param boolean $escape_invalid Should invalid HTML be escaped instead of fully removed?
     *
     * @return string Purified string.
     */
    public static function getPurified(?string $input, bool $escape_invalid = false): string {
        // Require HTMLPurifier
        if (!isset(self::$_purifier)) {
            require_once(join(DIRECTORY_SEPARATOR, [ROOT_PATH, 'core', 'includes', 'htmlpurifier', 'HTMLPurifier.standalone.php']));

            $purifierConfig = HTMLPurifier_Config::createDefault();

            // Config settings
            $purifierConfig->set('HTML.Doctype', 'XHTML 1.0 Transitional');
            $purifierConfig->set('URI.DisableExternalResources', false);
            $purifierConfig->set('URI.DisableResources', false);
            $purifierConfig->set('HTML.Allowed', 'u,a,p,b,i,small,blockquote,span[style],span[class],p,strong,em,li,ul,ol,div[align],br,img,figure,figcaption');
            $purifierConfig->set('CSS.AllowedProperties', ['text-align', 'display', 'float', 'color', 'background-color', 'background', 'font-size', 'font-family', 'text-decoration', 'font-weight', 'font-style', 'font-size']);
            $purifierConfig->set('CSS.AllowTricky', true);
            $purifierConfig->set('HTML.AllowedAttributes', 'target, rel, href, id, src, height, width, alt, class, *.style');
            $purifierConfig->set('Attr.AllowedFrameTargets', ['_blank', '_self', '_parent', '_top']);
            $purifierConfig->set('Attr.AllowedRel', ['noopener', 'nofollow']);
            $purifierConfig->set('HTML.SafeIframe', true);
            $purifierConfig->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%');
            $purifierConfig->set('Core.EscapeInvalidTags', $escape_invalid);
            $purifierConfig->set('AutoFormat.Linkify', true);

            $purifierConfig->set('HTML.DefinitionID', 'namelessmc');
            $purifierConfig->set('HTML.DefinitionRev', 1);
            $purifierConfig->set('Cache.DefinitionImpl', null);

            if ($def = $purifierConfig->maybeGetRawHTMLDefinition()) {
                $def->addElement('figure', 'Block', 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow', 'Common');
                $def->addElement('figcaption', 'Inline', 'Flow', 'Common');
            }

            self::$_purifier = new HTMLPurifier($purifierConfig);
        }

        // Purify the string
        return self::$_purifier->purify($input);
    }
}
