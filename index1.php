<?php

require __DIR__ . '/classes/DB.php';

$db = new DB();
$items = $db->query('SELECT * FROM news');
var_dump($items);