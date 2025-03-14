<?php
require_once 'Models/ProductModel.php';
require_once 'BaseController.php';

class ProductController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new ProductModel();
    }

    function index()
    {
        $products = $this->model->getProducts();
        $brand = $this->model->getBrand();
        $category = $this->model->getCategory();
        $this->views('/Inventory/products/product.php', ["products" => $products, "brands" => $brand, "categories" => $category]);
    }

    function create()
    {
        $brand = $this->model->getBrand();
        $category = $this->model->getCategory();
        if (empty($brand) || empty($category)) {
            echo "Warning: Brands or Categories not loaded!";
        }
        $this->views('/Inventory/products/create.php', ["brands" => $brand, "categories" => $category]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Debug: Check if form data is received
            echo "<pre>POST Data: ";
            print_r($_POST);
            echo "FILES Data: ";
            print_r($_FILES);
            echo "</pre>";

            // Handle image upload
            $imagePath = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true); // Create directory if it doesn’t exist
                }
                $imagePath = $target_dir . basename($_FILES['image']['name']);
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    echo "Error: Failed to upload image.";
                    return;
                }
            }

            // Collect form data
            $data = [
                'product_name' => $_POST['product_name'] ?? '',
                'quantity' => $_POST['quantity'] ?? 0,
                'price' => $_POST['price'] ?? 0.00,
                'category_id' => $_POST['category_id'] ?? null,
                'brand_id' => $_POST['brand_id'] ?? null,
                'product_content' => $_POST['product_content'] ?? '',
                'image' => $imagePath,
                'admin_id' => 1 // Replace with $_SESSION['admin_id'] later
            ];
            if ($this->model->createProduct($data)) {
                $this->redirect('/products');
            } else {
                echo "Failed to create product.";
            }
        } else {
            echo "Error: Invalid request method.";
        }
    }

    function edit($id) {
        // $this->model->getProduct($id);
        $this->views('/Inventory/products/create.php');

    }
    function view()
    {
        $this->views('/Inventory/products/view.php');
    }
}