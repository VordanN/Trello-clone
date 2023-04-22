<?php

namespace controllers;

use core\Controller;
use core\Utils;
use Exception;
use models\Users;


class UsersController extends Controller {
    public function indexAction()
    {
        return $this->render();
    }

    public function loginAction()
    {
        if(isset($_POST["sbmt_login"])){
            $email = $_POST["email"];
            $password = $_POST["pwd"];

            $user = Users::getUser($email);

            try {
                if (empty($user)) {
                    throw new Exception("User not found!");
                }
                if ($user["pwd"] != Utils::Encrypt($password)) {
                    throw new Exception("Incorrect password!");
                }
                Users::loginUser($user);
                Utils::Redirect("/");
            } catch (Exception $ex) {
                return $this->render([
                    "email" => $email,
                    "error" => $ex->getMessage()
                ]);
            }
        }
        return $this->render();
    }

    public function logoutAction()
    {
        unset($_SESSION["global_id"]);
        Utils::Redirect("/");
    }

    public function signupAction()
    {
        if(isset($_POST["submit"])){
            $name = $_POST["fname"];
            $lastname = $_POST["lname"];
            $email = $_POST["email"];
            $password = $_POST["pwd"];

            $user = Users::getUser($email);


            try {
                if (!empty($user)) {
                    throw new Exception("User already exists!");
                }
                Users::registerUser($name.' '.$lastname, $email, $password, 2);
                Utils::Redirect("/users/login");
            } catch (Exception $ex) {
                return $this->render([
                    "name" => $name,
                    "lastname" => $lastname,
                    "email" => $email,
                    "error" => $ex->getMessage()
                ]);
            }
        }
        return $this->render();
    }
}