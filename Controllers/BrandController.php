<?php
// require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class BrandController extends BaseController
{
    private $model;

    function __construct()
    {
        // $this->model = new CategoryModel();
    }

    function index()
    {
        // echo "Brand list";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
        $this->views('/Inventory/brands/brand.php');
    }
    function create()
    {
        echo "create Brand";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
}



