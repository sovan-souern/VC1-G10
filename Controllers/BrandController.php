<?php
// require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class BrandController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new CategoryModel();
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
        $this->views('/Inventory/brands/create.php');
        // $categories = $this->model->getCategories();
        $this->views('/Inventory/brands/create.php');
    }
    function store()
    {
        // echo "create Brand";
        echo "1";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
    function edit()
    {
        // echo "create Brand";
        $this->views('/Inventory/brands/edit.php');
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
}



