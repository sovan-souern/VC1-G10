<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/DiscountModel.php';
require_once "Models/ProductModel.php";

class HomeController extends BaseController {

    private $model;
    private $productModel;

    function __construct()
    {
        $this->model = new DiscountModel();
        $this->productModel= new ProductModel();
    }

    function index() {
        // echo "Home";
        $products = $this->productModel->getProducts();
        $discounts = $this->model->getDiscounts();  
        $this->ViewsUser('E-commerce-user/home/home.php', ["discounts" => $discounts,"products" => $products]);
        $this->ViewsUser('E-commerce-user/home/home.php', []); 
    }

}