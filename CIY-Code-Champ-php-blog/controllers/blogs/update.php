<?php

use Core\Database;

$config = require('config.php');
$db = new Database($config['database']);

$db->query('UPDATE blogs SET title = :title, body = :body WHERE id = :id;', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

// redirect to a page
header('location: /blogs');
die();
