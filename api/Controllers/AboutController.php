<?php
require_once 'Controllers/BaseController.php';

class AboutController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/about/about.php'); 
    }
}