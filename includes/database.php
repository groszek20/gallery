<?php

require_once ("new_config.php");

class Database {
    
    private $connection;

    public function openConnectionPDO() {
        try {
            $this->$connection = new PDO(dsn, DB_USER, DB_PASS, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            exit("Połączenie nie mogło zostać utworzone");
        }
    }

    
}
$database = new Database();
$database->openConnectionPDO();