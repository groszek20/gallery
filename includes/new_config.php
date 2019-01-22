<?php

define("DB_USER", "root");
define("dsn", 'mysql:dbname=gallery;host=localhost');
define("DB_PASS", "");

$options = [
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES => false,
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


