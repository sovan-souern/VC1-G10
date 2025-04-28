<?php
require_once 'Models/ProductModel.php';
require_once 'BaseController.php';
require_once 'Models/NotificationModel.php';
class ProductController extends BaseController
{
    private $model;
    private $model_Notification;

    function __construct()
    {
        $this->model = new ProductModel();
        $this->model_Notification= new NotificationModel();
    }

    function index()
    {
        $products = $this->model->getProducts();
        $brand = $this->model->getBrands();
        $category = $this->model->getCategories();
        $this->views('/Inventory/products/product.php', ["products" => $products, "brands" => $brand, "categories" => $category]);
    }
    function create()
    {
        $brand = $this->model->getBrands();
        $category = $this->model->getCategories();
        if (empty($brand) || empty($category)) {
            echo "Warning: Brands or Categories not loaded!";
        }
        $this->views('/Inventory/products/create.php', ["brands" => $brand, "categories" => $category]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<pre>POST Data: ";
            print_r($_POST);
            echo "FILES Data: ";
            print_r($_FILES);
            echo "</pre>";
            $imagePath = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $imagePath = $target_dir . basename($_FILES['image']['name']);
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    echo "Error: Failed to upload image.";
                    return;
                }
            }

            $data = [
                'product_name' => $_POST['product_name'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price'],
                'category_id' => $_POST['category_id'],
                'brand_id' => $_POST['brand_id'],
                'product_content' => $_POST['product_content'],
                'admin_id' => !empty($_POST['admin_id']) ? $_POST['admin_id'] : null,
                'image' => $imagePath,
                'created_at' => date('Y-m-d H:i:s')
            ];

            if ($this->model->createProduct($data)) {
                // Get the last inserted product ID
                $lastProductId = $this->model->getLastProductId();

                if ($lastProductId) { // Ensure the product ID is valid
                    // Create a notification for the new product
                    $dataNotification = [
                        'product_id' => $lastProductId,
                        'message' => 'Product out stock',
                        'created_at' => date('Y-m-d H:i:s'),
                        'type' => 'product',
                        'status' => 'unread',
                    ];
                    $this->model_Notification->NotificationProduct($dataNotification);
                } else {
                    echo "Error: Failed to retrieve last product ID.";
                }

                $this->redirect('/products');
            } else {
                echo "Failed to create product.";
            }
        } else {
            echo "Error: Invalid request method.";
        }
    }

    function edit($id)
    {
        $product = $this->model->getProduct($id);
        $brands = $this->model->getBrands();
        $categories = $this->model->getCategories();

        if (!$product) {
            echo "Error: Product with ID $id not found.";
            return;
        }

        $this->views('/Inventory/products/edit.php', [
            'product' => $product,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imagePath = $_POST['existing_image']; // Use existing image if no new image is uploaded
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $imagePath = $target_dir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            }
            $data = [
                'product_id' => $id,
                'product_name' => $_POST['product_name'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price'],
                'category_id' => $_POST['category_id'],
                'brand_id' => $_POST['brand_id'],
                'product_content' => $_POST['product_content'],
                'admin_id' => !empty($_POST['admin_id']) ? $_POST['admin_id'] : null,
                'image' => $imagePath,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $dataNotification = [
                'product_id' => $id,
                'status' => "unread"
            ];
            $this->model_Notification->UpdateProductNotification($dataNotification); // Update notification status
            if ($this->model->updateProduct($data)) {
                $this->redirect('/products');
            } else {
                echo "Error updating product.";
            }
        } else {
            echo "Invalid request method.";
        }
    }
    function destroy($id)
    {

        $this->model->deleteProduct($id);


        $this->redirect('/products');
    }

    function view($id)
    {
        // echo "View Product";
        $products = $this->model->getProduct($id);
        $categories = $this->model->getCategories($id);
        $brands = $this->model->getBrands($id);
        $this->views('/Inventory/products/view.php', ["products" => $products, "categories" => $categories, "brands" => $brands]);
    }
    function OutStock()
    {

        $products = $this->model->getProducts();
        $brand = $this->model->getBrands();
        $category = $this->model->getCategories();
        $this->views('/Inventory/products/outstock.php', ["products" => $products, "brands" => $brand, "categories" => $category]);
    }
    // notification 
    function Notification()  
    {   
        $products = $this->model->getProducts();  
        $brand = $this->model->getBrands();   
        $category = $this->model->getCategories();   
        $this->views('/Inventory/products/outstock.php', ["products" => $products, "brands" => $brand, "categories" => $category]);   
    } 
}
