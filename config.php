<?php

function __autoload($class_name) {
    $path = "library/{$class_name}.php";
    if (file_exists($path)) {
        include_once $path;
    }
}

$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'name' => 'king_books',
);
