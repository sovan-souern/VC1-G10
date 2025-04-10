<?php

require_once 'Models/DetailModel.php';
require_once 'BaseController.php';

class DetailController extends BaseController
{
    private $details;

    public function __construct()
    {
       
        $this->details = new DetailModel();
    }

    public function index($id) 
    {
   
        $products = $this->details->getDetailById($id);
        // var_dump($products);        
      
        $this->ViewsUser("E-commerce-user/card/detail.php",["products" => $products]);

    }
}
?>
