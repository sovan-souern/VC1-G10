<?php
require_once 'Controllers/BaseController.php';

class UserController extends BaseController{
        function index(){
            $this->views('/E-comerce/users/user.php');
            
        }
}