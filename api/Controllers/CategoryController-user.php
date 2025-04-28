<?php
require_once 'Controllers/BaseController.php';

class CategoryController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/category-user/SunScream.php'); 
    }
}