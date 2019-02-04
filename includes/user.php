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

    public static function initialize($found_user) {
        $the_object = new self;
 
        $the_object->username = $found_user["username"];
        $the_object->user_id = $found_user["id"];
        $the_object->password = $found_user["password"];
        $the_object->first_name = $found_user["firstname"];
        $the_object->last_name = $found_user["lastname"];
        
        return $the_object;
    }

}

?>
