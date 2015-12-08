<?php
global $db;
 $dsn = 'mysql:host=localhost;dbname=users';
    $username = 'will';
    $password = '1234';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'error';
        exit();
    }

