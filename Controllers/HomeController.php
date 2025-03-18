<?php
require_once 'Controllers/BaseController.php';

class HomeController extends BaseController {
    function index() {
        $this->viewsUser('E-commerce-user/home.php'); 
    }
}