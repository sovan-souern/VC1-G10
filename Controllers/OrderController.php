<?php

require_once 'BaseController.php';

class OrderController extends BaseController
{
    private $model;

    function __construct()
    {
        
    }

    function index()
    {
        // echo "Order";
        $this->views('/E-comerce/order/order.php');
    }

   
}

