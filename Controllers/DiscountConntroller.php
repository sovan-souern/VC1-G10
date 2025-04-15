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
    function index()
    {
        $discounts = $this->model->getDiscounts();
        $this->views('Inventory/Discounts/list.php', ["discounts" => $discounts]);
    }
    function history()
    {
        $discounts = $this->model->getDiscounts();
        $this->views('/Inventory/Discounts/history.php', ["discounts" => $discounts]);
        // require_once 'Views/Inventory/Discounts/history.php';
    }

    function create($id)
    {

        $products = $this->model->getProduct($id);
        $discount = $this->model->getDiscount($id);

        $this->views('Inventory/Discounts/create.php', ["product" => $products, "discount" => $discount]);
    }
    function discountCategory($id)
    {

        $products = $this->model->getProduct($id);
        $discount = $this->model->getDiscount($id);

        $this->views('Inventory/Discounts/create.php', ["product" => $products, "discount" => $discount]);
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

    function edit($id)
    {

        $products = $this->model->getProduct($id);
        $discount = $this->model->getDiscount($id);
        $this->views('Inventory/Discounts/edit.php', ["discount" => $discount, "product" => $products]);
    }
    function update()
    {
        echo "1";
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
                'updated_at' => date('Y-m-d H:i:s')
            ];

            if ($this->model->updateDiscount($data)) {
                $this->redirect('/discount');
            } else {
                echo "Failed to update discount.";
            }
        } else {
            echo "Error: Invalid request method.";
        }
    }
    function destroy($id)
    {

        if ($this->model->delete($id)) {
            $this->redirect('/discount');
        } else {
            echo "Failed to delete discount.";
        }
    }
    function view($id)
    {
        $products = $this->model->getProduct($id);
        $discount = $this->model->getDiscount($id);
        $categories = $this->model->getCategories($id);
        $brands = $this->model->getBrands($id);
        $this->views("Inventory/Discounts/view.php", ["discount" => $discount, "products" => $products, "categories" => $categories, "brands" => $brands]);
    }
    function discountProductCategory($id)
    {
        $categories = $this->model->discountCategory($id);
        // var_dump($categories["category_name"]); 
        // var_dump($id);
        $brands = $this->model->getBrands();
        // $products = $this->model->getProducts();  
        $this->views('/Inventory/Discounts/descoutCategory.php', ["categories" => $categories]);
    }
    function storeCategory($id)
    {
        $products = $this->model->getProducts(); // Get all products
        foreach ($products as $product) {
            if ($product['category_id'] == $id) { 
                $data = [
                    'product_id' => $product['product_id'], 
                    'discount_percentage' => $_POST['discount'],
                    'start_date' => $_POST['start_date'],
                    'end_date' => $_POST['end_date'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                $this->model->createDiscount($data); 
            }
        }
        $this->redirect('/discount'); 
    }
    function discountBrand($id)
    {
        	
        $brands = $this->model->discountBrand($id);
        $this->views('/Inventory/Discounts/descountBrand.php', ["brands" => $brands]);
    }
    function storeBrand($id)
    {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $products = $this->model->getProducts(); // Get all products
            foreach ($products as $product) {
                if ($product['brand_id'] == $id) { 
                    $data = [
                        'product_id' => $product['product_id'], 
                        'discount_percentage' => $_POST['discount'],
                        'start_date' => $_POST['start_date'],
                        'end_date' => $_POST['end_date'],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $this->model->createDiscount($data); 
                }
            }
            $this->redirect('/discount'); 
        } else {
            echo "Error: Invalid request method.";
        }
    }
    function  createProuductDiscount(){
       
        $products = $this->model->getProducts();
        $discount = $this->model->getDiscounts();

        $this->views('Inventory/Discounts/DisountProduct.php', ["products" => $products, "discounts" => $discount]);
        
    }
}