<?php

$db = 'PW13';
$config = [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => ''
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS ' . $db;
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

$sql = 'USE ' . $db;
$mysqli->query($sql);

$sql = 'CREATE TABLE IF NOT EXISTS users ( 
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(255) NOT NULL, 
        lastname VARCHAR(255) NOT NULL, 
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        admin BOOLEAN NOT NULL DEFAULT 0
    )';

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

// Leggo i dati dalla tabella users
$sql = 'SELECT * FROM users;';
$res = $mysqli->query($sql);
if ($res->num_rows === 0) {
    // Inserisco dati in una tabella
    $sql = 'INSERT INTO users (firstname, lastname, email, password, admin) 
            VALUES ("Mario", "Rossi", "m.rossi@mail.com", "' . "password123" . '", 1);';
    if (!$mysqli->query($sql)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Record aggiunto con successo.';
    }
}
