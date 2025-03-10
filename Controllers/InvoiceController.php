<?php
// require_once 'Models/OrderModel.php';
require_once 'BaseController.php';

class InvoiceController extends BaseController
{
    private $model;

    function __construct()
    {
        
    }

    function index()
    {
        echo "Invoice";
    }
   
}
