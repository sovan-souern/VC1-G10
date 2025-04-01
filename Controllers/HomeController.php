<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/DiscountModel.php';

class HomeController extends BaseController {

    private $model;

    function __construct()
    {
        $this->model = new DiscountModel();
    }

    function index() {

        $discounts = $this->model->getDiscounts();  
        $this->ViewsUser('E-commerce-user/home/home.php', ["discounts" => $discounts]);
        $this->ViewsUser('E-commerce-user/home/home.php', []); 
    }

}