<?php
require_once 'Controllers/BaseController.php';
require_once "Controllers/CategoryProductController.php";
require_once "Controllers/ProductController.php";
require_once "Models/DiscountModel.php";    


class ShopController extends BaseController {
    private $model;
    private $model_Product;
    private $model_Discount;
    function __construct()
    {
        $this->model=new CategoryModel();
        $this->model_Product=new ProductModel();
        $this->model_Discount=new DiscountModel();
    }
    function index() {
        $categories=$this->model->getCategories();
        $products=$this->model_Product->getProducts();
        $discounts=$this->model_Discount->getDiscounts();
       
        $this->ViewsUser('E-commerce-user/shop/shop.php',["categories"=>$categories,"products"=>$products,"discounts"=>$discounts]); 
       
    }
}   