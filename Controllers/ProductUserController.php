<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/ProductModel.php';
require_once "Models/DiscountModel.php";

class ProductUserController extends BaseController {
    private $modle;
    function __construct()
    {
        $this->modle=new DiscountModel();   
        
    }
    function index() {
        $productModel = new ProductModel();
        $discounts=$this->modle->getDiscounts();
        $products = $productModel->getProducts();


        $this->ViewsUser('E-commerce-user/products/product.php', ['products' => $products,"discounts"=>$discounts]);
        
    }
    function ProductCard() {
        require_once 'Views/E-commerce-user/card/addcart.php';
    }
    function ProductDetail() {
        require_once 'Views/E-commerce-user/card/view-card.php';
    }

    function ProductCheckout() {
        require_once 'Views/E-commerce-user/card/checkout.php';
    }
}