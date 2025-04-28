<?php

class DetailModel {

    private $pdo;

    public function __construct()
    {
        try {
            // Assuming you have a Database class to handle DB connections
            $this->pdo = new Database();  // Initialize database connection
        } catch (Exception $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Function to fetch details of a product by ID using simple query
    public function getDetailById($productId)
    {
        // Using a simple query
        $sql = "
            SELECT p.*, d.discount_percentage
            FROM products p
            LEFT JOIN discounts d ON p.product_id = d.product_id
            WHERE p.product_id = $productId
        ";  

        $stmt = $this->pdo->query($sql);
        return $stmt->fetch(); 
    }



}

?>
