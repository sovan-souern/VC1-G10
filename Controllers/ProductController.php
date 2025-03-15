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
                        mkdir($target_dir, 0777, true);
                    }
                    $imagePath = $target_dir . basename($_FILES['image']['name']);
                    if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                        echo "Error: Failed to upload image.";
                        return;
                    }
                }

                $data = [
                    'product_name' => $_POST['product_name'] ?? '',
                    'quantity' => $_POST['quantity'] ?? 0,
                    'price' => $_POST['price'] ?? 0.00,
                    'category_id' => $_POST['category_id'] ?? null,
                    'brand_id' => $_POST['brand_id'] ?? null,
                    'product_content' => $_POST['product_content'] ?? '',
                    'image' => $imagePath,
                    'admin_id' => 1 
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
            echo $id;
            var_dump($_SERVER);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Handle image upload
                $imagePath = $_POST['existing_image']; // Keep old image if no new image is uploaded
                if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                    $target_dir = "uploads/";
                    if (!is_dir($target_dir)) {
                        mkdir($target_dir, 0777, true);
                    }
                    $imagePath = $target_dir . basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
                }
                // Prepare product data for update
                $data = [
                    'product_id' => $id,
                    'product_name' => $_POST['product_name'] ?? '',
                    'quantity' => $_POST['quantity'] ?? 0,
                    'price' => $_POST['price'] ?? 0.00,
                    'category_id' => $_POST['category_id'] ?? null,
                    'brand_id' => $_POST['brand_id'] ?? null,
                    'product_content' => $_POST['product_content'] ?? '',
                    'image' => $imagePath
                ];
                // Update the product
                if ($this->model->updateProduct($data)) {
                    $this->redirect('/products');
                } else {
                    echo "Error updating product.";
                }
            } else {
                echo "Invalid request method.";
            }
        }
        function destroy($id){
 
            $this->model->deleteProduct($id);
            $this->redirect('/products');
        }
        
        function view()
        {
            $this->views('/Inventory/products/view.php');
        }
    }