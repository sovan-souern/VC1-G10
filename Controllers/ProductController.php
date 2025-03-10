<!-- Code for get data -->

<?php
// require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class ProductController extends BaseController
{
    private $model;

    function __construct()
    {
        // $this->model = new ProductModel();
    }

    function index()
    {
        echo "product";
        $this->views('/Inventory/products/product.php');

    }
    function create()
    {
        $this->views('/Inventory/products/create.php');
        // $this->redirect("/product");

    }
    function edit()
    {
        $this->views('/Inventory/products/edit.php');
        // echo "1:";

    }
    function view()
    {
        $this->views('/Inventory/products/view.php');
        

    // }
}}