<?php
require_once 'Databases/database.php';

class DiscountModel
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

    function createDiscount($data)
    {
        try {
            $stmt = "INSERT INTO discounts (product_id, discount_percentage, start_date, end_date, created_at, updated_at) 
                     VALUES (:product_id, :discount_percentage, :start_date, :end_date, :created_at, :updated_at)";
            $this->pdo->query($stmt, [
                'product_id' => $data['product_id'],
                'discount_percentage' => $data['discount_percentage'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at']
            ]);
            return true;
        } catch (Exception $e) {
            echo "Error creating discount: " . $e->getMessage();
            return false;
        }
    }
    
    function getDiscount()
    {
        try {
            $stmt = $this->pdo->query("SELECT 
                discounts.discount_id, 
                discounts.product_id, 
                discounts.discount_percentage, 
                discounts.start_date, 
                discounts.end_date, 
                discounts.created_at, 
                discounts.updated_at,
                products.product_name,
                products.price,
                products.quantity,
                products.image,
                categories.category_name AS category,
                brand.brand_name AS brand
            FROM discounts 
            LEFT JOIN products ON discounts.product_id = products.product_id
            LEFT JOIN categories ON products.category_id = categories.category_id
            LEFT JOIN brand ON products.brand_id = brand.id");
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching discounts: " . $e->getMessage());
        }
    }


}