<?php

use Core\Database;

$config = require('config.php');
$db = new Database($config['database']);

$blog = $db->query('select * from blogs where id = :id', ['id' => $_GET['id']])->findOrFail();

$current_user_id = 1;

authorize($blog['user_id'] === $current_user_id);

// require("views/blogs/edit.view.php");
view("blogs/edit.view.php", ['blog' => $blog]);
