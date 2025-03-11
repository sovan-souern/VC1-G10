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


        $this->views('/Inventory/categories/category.php');
    }
    function create()
    {
        echo "createcategory product";
       
    }
}



