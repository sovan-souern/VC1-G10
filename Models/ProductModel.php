<?php
require_once 'Databases/database.php';

class ProductModel
{
    private $pdo;

    function __construct()
    {
        // try {
            $this->pdo = new Database();
        // } catch (Exception $e) {
        //     die("Database connection failed: " . $e->getMessage());
        // }
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
            LEFT JOIN brand ON products.brand_id = brand.id");
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching products: " . $e->getMessage());
        }
    }

    function getBrand()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM brand');
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching brands: " . $e->getMessage());
        }
    }

    function getCategory()
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
                'admin_id' => $data['admin_id']
            ]);
            return true; // Success
        } catch (Exception $e) {
            echo "Error creating product: " . $e->getMessage();
            return false;
        }
    }
    function getProduct($id){
        $stmt=$this->pdo->query('SELECT * FROM products where id=:id', ['id' => $id]);
        return $stmt->fetch();
    }
}
