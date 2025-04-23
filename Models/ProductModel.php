<?php
require_once 'Databases/database.php';

class ProductModel
{
    private $pdo;

    function __construct()
    {
        try {
            $this->pdo = new Database();
        } catch (Exception $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    function getProducts()
    {
        try {
            $stmt = $this->pdo->query("SELECT 
                products.product_id, 
                products.product_name,
                products.price, 
                products.quantity, 
                products.created_at, 
                products.admin_id, 
                products.image, 
                products.category_id,   
                categories.category_name AS categoryId,
                products.brand_id, 
                brand.brand_name AS brandID
            FROM products 
            LEFT JOIN categories ON products.category_id = categories.category_id
            LEFT JOIN brand ON products.brand_id = brand.id 
            ORDER BY products.created_at ");
    
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching products: " . $e->getMessage());
        }
    }
    

    function getBrands()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM brand');
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching brands: " . $e->getMessage());
        }
    }

    function getCategories()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM categories');
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching categories: " . $e->getMessage());
        }
    }

    function createProduct($data)
    {
        try {
            $stmt = "INSERT INTO products (product_name, quantity, price, category_id, brand_id, product_content, image, admin_id) 
                     VALUES (:product_name, :quantity, :price, :category_id, :brand_id, :product_content, :image, :admin_id)";
            $this->pdo->query($stmt, [
                'product_name' => $data['product_name'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'] ?: null,
                'product_content' => $data['product_content'],
                'image' => $data['image'],
                'admin_id' => !empty($data['admin_id']) ? $data['admin_id'] : null
            ]);
            return true;
        } catch (Exception $e) {
            echo "Error creating product: " . $e->getMessage();
            return false;
        }
    }

    function getProduct($id)
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM products WHERE product_id = :id', ['id' => $id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Error fetching product: " . $e->getMessage();
            return false;
        }
    }

    function updateProduct($data)
    {
        try {
            $stmt = $this->pdo->query(
                "UPDATE products SET 
                    product_name = :product_name, 
                    quantity = :quantity, 
                    price = :price, 
                    category_id = :category_id, 
                    brand_id = :brand_id, 
                    product_content = :product_content, 
                    image = :image 
                WHERE product_id = :product_id",
                [
                    'product_name' => $data['product_name'],
                    'quantity' => $data['quantity'],
                    'price' => $data['price'],
                    'category_id' => $data['category_id'],
                    'brand_id' => $data['brand_id'],
                    'product_content' => $data['product_content'],
                    'image' => $data['image'],
                    'product_id' => $data['product_id'] // Ensure product_id is included in the query
                ]
            );
            return true;
        } catch (Exception $e) {
            echo "Error updating product: " . $e->getMessage();
            return false;
        }
    }
    function deleteProduct($id)
    {

        $stmt = $this->pdo->query("DELETE FROM products WHERE product_id = :id", [
            'id' => $id
        ]);
    }

    public function getAllProducts()
    {
        try {
            $query = "SELECT * FROM products";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error fetching all products: " . $e->getMessage();
            return false;
        }
    }

    function getLastProductId()
    {
        try {
            $stmt = $this->pdo->query("SELECT MAX(product_id) AS last_id FROM products");
            $result = $stmt->fetch();
            return $result ? $result['last_id'] : null;
        } catch (Exception $e) {
            echo "Error fetching last product ID: " . $e->getMessage();
            return false;
        }
    }

    function updateProductQuantity($productId, $amountProduct)
    {
        try {
            $stmt = $this->pdo->query(
                "UPDATE products SET 
                    quantity = quantity - :amountProduct 
                WHERE product_id = :productId",
                [
                    'amountProduct' => $amountProduct, // Subtract the provided amount
                    'productId' => $productId // Match the product by ID
                ]
            );
            return true;
        } catch (Exception $e) {
            echo "Error updating product quantity: " . $e->getMessage();
            return false;
        }
    }
}

