<?php
require_once 'Controllers/BaseController.php';

class ProductUserController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/products/product.php'); 
    }
}