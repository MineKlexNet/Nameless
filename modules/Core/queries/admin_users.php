<?php
// Returns set of users for the StaffCP Users tab
header('Content-type: application/json;charset=utf-8');

if (!$user->isLoggedIn() || !$user->hasPermission('admincp.users')) {
    die(json_encode('Unauthenticated'));
}

$sortColumns = ['username' => 'username', 'nickname' => 'nickname', 'joined' => 'joined'];

$db = DB::getInstance();

$total = $db->selectQuery('SELECT COUNT(*) as `total` FROM nl2_users', [])->first()->total;
$query = 'SELECT nl2_users.id as id, nl2_users.username as username, nl2_users.nickname as nickname, nl2_users.joined as joined FROM nl2_users';
$where = '';
$order = '';
$limit = '';
$params = [];

if (isset($_GET['search']) && $_GET['search']['value'] != '') {
    $where .= ' WHERE username LIKE ? OR nickname LIKE ? OR email LIKE ?';
    array_push($params, '%' . $_GET['search']['value'] . '%', '%' . $_GET['search']['value'] . '%', '%' . $_GET['search']['value'] . '%');
}

if (isset($_GET['order']) && count($_GET['order'])) {
    $orderBy = [];

    for ($i = 0, $j = count($_GET['order']); $i < $j; $i++) {
        $column = intval($_GET['order'][$i]['column']);
        $requestColumn = $_GET['columns'][$column];

        $column = array_search($requestColumn['data'], $sortColumns);

        if ($column) {
            $dir = $_GET['order'][$i]['dir'] === 'asc' ?
                'ASC' :
                'DESC';

            $orderBy[] = '`' . $column . '` ' . $dir;
        }
    }

    if (count($orderBy)) {
        $order .= ' ORDER BY ' . implode(', ', $orderBy);
    } else {
        $order .= ' ORDER BY username ASC';
    }
} else {
    $order .= ' ORDER BY username ASC';
}

if (isset($_GET['start']) && $_GET['length'] != -1) {
    $limit .= ' LIMIT ' . intval($_GET['start']) . ', ' . intval($_GET['length']);
} else {
    // default 10
    $limit .= ' LIMIT 10';
}

if (strlen($where) > 0) {
    $totalFiltered = $db->selectQuery('SELECT COUNT(*) as `total` FROM nl2_users' . $where, $params)->first()->total;
}

$results = $db->selectQuery($query . $where . $order . $limit, $params)->results();
$data = [];
$groups = [];

if (count($results)) {
    foreach ($results as $result) {
        $obj = new stdClass();
        $obj->id = $result->id;
        $obj->username = Output::getClean($result->username);
        $obj->nickname = Output::getClean($result->nickname);
        $obj->joined = date('d M Y', $result->joined);

        // Get group
        $group = DB::getInstance()->selectQuery('SELECT `name` FROM nl2_groups g JOIN nl2_users_groups ug ON g.id = ug.group_id WHERE ug.user_id = ? ORDER BY g.order ASC LIMIT 1', [$result->id]);
        $obj->groupName = $group->first()->name;

        $data[] = $obj;
    }
}

echo json_encode(
    [
        'draw' => isset($_GET['draw']) ? intval($_GET['draw']) : 0,
        'recordsTotal' => $total,
        'recordsFiltered' => $totalFiltered ?? $total,
        'data' => $data
    ],
    JSON_PRETTY_PRINT
);
