<?php

define("DB_USER", "root");
define("dsn", 'mysql:dbname=gallery;host=localhost');
define("DB_PASS", "");

$options = [
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES => false,
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

function getConnectionPDO() {
    try {
        $connection = new PDO(dsn, DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        if ($connection){
            echo "true";
        }
        return $connection;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        exit("Połączenie nie mogło zostać utworzone");
    }
}

getConnectionPDO();
