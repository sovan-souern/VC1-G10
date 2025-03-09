<?php
require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class CategoryController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new CategoryModel();
    }

    function categories()
    {
        $categories = $this->model->getCategories();
        $this->views('categories/category.php',['categories'=>$categories]);
    }
}



