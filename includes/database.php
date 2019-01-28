<?php

require_once ("new_config.php");

class Database {

    public $connection;

    function __construct() {
        $this->openConnectionPDO();
    }

    public function openConnectionPDO() {
        try {
            $this->connection = new PDO(dsn, DB_USER, DB_PASS, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            exit("Połączenie nie mogło zostać utworzone");
        }
    }

    public function query($sql) {
        $result = $this->query($sql);
        if (!$result) {
            die("Query Failed");
        }
        return $result;
    }

    private function confirm_query($result) {
        if (!$result) {
            die("Query Failed");
        }
    }

}

$database = new Database();
