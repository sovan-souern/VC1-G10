<?php
// require_once 'Models/ShopownerModel.php';
require_once 'BaseController.php';

class ShopOwnerController extends BaseController
{
    private $model;

    function __construct()
    {
        
    }

    function index()
    {
        // echo "Shop owner";
        $this->views('/E-comerce/shop-owner/shop-owner.php');
       
    }

   
}
