<?php

class User{
    public static $username = "Nazebul";
    public static function loginpage(){
        echo self::$username;
    }
}
// $obj = new User;
// $obj->loginpage();
User::loginpage();



?>