<?php

namespace models;

use core\Core;
use core\Utils;


class Users
{
    public static $tablelName = "tbl_u";

    public static function registerUser($name,$email,$password,$role){
        $result = Core::getInstance()->context->table(self::$tablelName)->insert([
            "name" => $name,
            "email" => $email,
            "pwd" => Utils::Encrypt($password),
            "fk_role" => $role
        ])->execute();
    }

    public static function getUser($email){
        return Core::getInstance()->context->table(self::$tablelName)->select()->where([
            "email" => $email
        ])->execute()[0] ?? null;
    }

    public static function loginUser($user){
        $_SESSION["global_id"] = $user["uid"];
    }

    public static function getLoginedUser(){
        return $_SESSION["global_id"] ?? null;
    }
}