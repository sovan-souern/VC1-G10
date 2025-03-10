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

        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
        $this->views('/Inventory/categories/category.php');
    }
    function create()
    {
        echo "createcategory product";
        // $categories = $this->model->getCategories();
        // $this->views('categories/category.php',['categories'=>$categories]);
    }
}



