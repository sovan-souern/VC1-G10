<?php
require_once 'Models/DiscountModel.php';
require_once 'BaseController.php';

class DiscountController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new DiscountModel();
    }

    function create($id)
    {
       
        $products = $this->model->getProduct($id);
        
        $this->views('Inventory/Discounts/create.php', ["product" => $products]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<pre>POST Data: ";
            print_r($_POST);
            echo "FILES Data: ";
            print_r($_FILES);
            echo "</pre>";

            $data = [
                'product_id' => $_POST['product_id'],
                'discount_percentage' => $_POST['discount'],
                'start_date' => $_POST['start_date'],
                'end_date' => $_POST['end_date'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            if ($this->model->createDiscount($data)) {
                $this->redirect('/discount');
            } else {
                echo "Failed to create discount.";
            }
        } else {
            echo "Error: Invalid request method.";
        }
    }
    function index()
    {
        

        
        $discounts = $this->model->getDiscount();
        
       
        $this->views('Inventory/Discounts/list.php', ["discounts" => $discounts]);
    }
}
