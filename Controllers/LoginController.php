<?php
require_once "BaseController.php";
class LoginController  extends BaseController {
    public function login() {
        require "login.php";

    }
}

// require_once "BaseController.php";

// class WelcomeController extends BaseController {
//     public function welcome() {
//         $this->views('views/welcome/welcome.php');
//     }
//     public function login() {
//         $this->views('views/auth/login.php');
//     }
//     public function register() {
//         $this->views('views/auth/register.php');
//     }
//     public function logout() {
//         session_start();
//         session_destroy();
//         header("Location: views/auth/login.php");
//         exit;
//     }
// }