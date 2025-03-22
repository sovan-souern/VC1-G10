<?php
require_once 'Controllers/BaseController.php';

class ShopController extends BaseController {
    function index() {
        $this->ViewsUser('E-commerce-user/shop/shop.php'); 
    }
}   