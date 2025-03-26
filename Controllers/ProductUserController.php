<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/ProductModel.php';

class ProductUserController extends BaseController {
    function index() {
        $productModel = new ProductModel();
        // $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        // $limit = 10; // Products per page
        // $offset = ($page - 1) * $limit;
        $products = $productModel->getProducts();
        $this->ViewsUser('E-commerce-user/products/product.php', ['products' => $products]);
    }
    function ProductCard() {
        require_once 'Views/E-commerce-user/products/card.php';
    }
    function ProductDetail() {
        require_once 'Views/E-commerce-user/products/view-card.php';
    }

    function ProductCheckout() {
        require_once 'Views/E-commerce-user/products/checkout.php';
    }
}