<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description VARCHAR(240) NOT NULL,
    picture VARCHAR(240),
    owner VARCHAR(100) NOT NULL,
    price FLOAT NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);