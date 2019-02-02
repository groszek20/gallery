<?php

class User {
    
    public $username;
    public $user_id;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all_users() {
        return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($user_id) {
        return self::find_this_query("SELECT * FROM users WHERE id=".$user_id)->fetch();
    }

    private static function find_this_query($sql) {
        global $database;
        $result_set = $database->queryPDO($sql);
        return $result_set;
    }

}

?>
