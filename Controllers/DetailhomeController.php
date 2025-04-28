<?php

require_once 'Models/DetailModel.php'; // Corrected path

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

        if ($products) {
            $this->ViewsUser("E-commerce-user/card/detail.php", ["products" => $products]);
        } else {
            $_SESSION['message'] = "Product not found.";
            header("Location: /404");
            exit(); 
        }
    }
}
?>