<?php
require_once 'Controllers/BaseController.php';

class HomeController extends BaseController {
    function index() {
        $this->views('Views/E-commerce-user/home.php');
    }
}