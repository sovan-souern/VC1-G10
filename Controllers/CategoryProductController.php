<?php
// require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class CategoryProuductController extends BaseController
{
    private $model;

    function __construct()
    {
        // $this->model = new CategoryModel();
    }

    function index()
    {
        echo "category product";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
    function create()
    {
        echo "createcategory product";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
}



