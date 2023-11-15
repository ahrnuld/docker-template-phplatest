<?php

require_once '../db.php';

$db = DB::getInstance();

$statements = [
    "create table if not exists USERS (user_id INT AUTO_INCREMENT, username VARCHAR(50), PRIMARY KEY(user_id))",
    "insert INTO USERS (username) values ('Wim Wiltenburg')",
];

foreach ($statements as $statement) {
    $db->exec($statement);
}

$users = $db->query("select * from USERS");
foreach ($users as $user) {
    var_dump($user);
}