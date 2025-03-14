<?php

class LoginRegisterController extends BaseController
{
    public function login () 
    {
        require "Views/auth/login.php";
    }

    public function register() 
    {
        require "Views/auth/register.php";
    }
}

?>
