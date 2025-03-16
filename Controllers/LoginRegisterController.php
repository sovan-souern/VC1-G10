<?php
require_once 'Models/UserModel.php';
require_once 'BaseController.php';

class LoginRegisterController extends BaseController
{
    public function login() 
    {
        require "Views/auth/login.php";
    }
    
    public function register() 
    {
        require "Views/auth/register.php";
    }

    public function viewlogin()
    {
        $userModel = new UserModel();
        $admins = $userModel->getAllAdmins();
        $this->views('/accountSetting/viewLogin.php', ['admins' => $admins]);
    }
}
?>
