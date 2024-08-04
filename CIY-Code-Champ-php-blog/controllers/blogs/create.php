<?php

use Core\Database;
use Core\Validator;

$config = require('config.php');
$db = new Database($config['database']);

require 'Validator.php';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // $validator = new Validator();

    if (!Validator::string($_POST['title'])) {
        $errors['title'] = 'title is required';
    }

    if (!Validator::string($_POST['body'], 1, 100)) {
        $errors['body'] = 'body of no more than 100 words is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO blogs(title, body, user_id) VALUES(:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

// dd($_SERVER['REQUEST_METHOD']);
// dd($_POST);

// require("views/blogs/create.view.php");
view("blogs/create.view.php", ['errors' => $errors]);
