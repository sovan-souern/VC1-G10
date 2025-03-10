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
    // function create()
    // {
    //     // echo "add product";

    // }
}




// new code

