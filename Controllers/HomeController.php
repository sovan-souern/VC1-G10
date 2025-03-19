<?php
require_once 'Controllers/BaseController.php';

class HomeController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/home.php'); 
    }
}