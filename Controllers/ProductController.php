<!-- Code for get data -->

<?php
require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class ProductController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new ProductModel();
    }

    function index()
    {
        // echo "product";
        $products=$this->model->getProduct();
        $brand=$this->model->getBrand();
        $category=$this->model->getCategory();
        $this->views('/Inventory/products/product.php',["products"=>$products, "brands"=>$brand,"categories"=>$category]);
       
    }
    function create()
    {
        $brand=$this->model->getBrand();
        $category=$this->model->getCategory();
        $this->views('/Inventory/products/create.php',[ "brands"=>$brand,"categories"=>$category]);
       

    }
    function edit()
    {
        // $this->views('/Inventory/products/edit.php');
        // echo "1:";

    }
    function view()
    {
        $this->views('/Inventory/products/view.php');
        

    // }
}}




// 