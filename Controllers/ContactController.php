<?php
require_once 'Controllers/BaseController.php';
require_once "Models/AdminModel.php";

class ContactController extends BaseController {
    private $model;
    function __construct() {
        $this->model = new AdminModel();
    }
    function index() {
        $users = $this->model->getAllAdmins();
        $this->ViewsUser('E-commerce-user/contact/contact.php',["users"=>$users]); 
    }
}