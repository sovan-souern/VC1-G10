<!-- Code for get data -->

<?php
require_once 'Models/CategoriesModel.php';
require_once 'BaseController.php';

class ProductController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new ProductModel();
    }

    function product()
    {
        $products = $this->model->getProduct();
        // require_once 'Views/products/product.php';
        $this->views('products/product.php',['products' => $products]);
    }
}




// new code

