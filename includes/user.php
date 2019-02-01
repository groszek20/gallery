<?php

class User {
   
    public static function find_all_users(){
        global $database;
        $result_set = $database->queryPDO("SELECT * FROM users");
        return $result_set;
    }
}

?>
