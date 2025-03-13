<?php
require_once 'Databases/database.php';

class ProductModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getProduct()
    {
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
            brand.brand_name     AS brandID
        FROM products 
        LEFT JOIN categories ON products.category_id = categories.category_id
        LEFT JOIN brand ON products.brand_id = brand.id");
        
        return $stmt->fetchAll();
    }
    function getBrand(){
        $stmt=$this->pdo->query('SELECT * FROM brand');
        return $stmt->fetchAll();
    }
    function getCategory(){
        $stmt=$this->pdo->query('SELECT * FROM categories');
        return $stmt->fetchAll();
    }
    // function createUser($data)
    // {
    //     $stmt = "INSERT INTO users (name, profile) VALUES (:name, :profile)";
    //     $this->pdo->query($stmt, [
    //         'name' => $data['name'],
    //         'profile' => $data['profile']
    //     ]);
    // }


}
