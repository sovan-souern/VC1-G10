<?php
require_once 'Databases/database.php'; // Adjust this path as needed

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = (new Database())->getConnection(); // Ensure getConnection() returns a PDO instance
    }

    function getOrder()
    {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }

    function createOrder($data, $id)
    {
        try {
            // Prepare the SQL statement for inserting each row
            $sql = "INSERT INTO orders (firstName, lastName, phone, order_status, total, address, buy_at, admin_id, amount_product, product_id) 
                    VALUES (:firstName, :lastName, :phone, :order_status, :total, :address, :buy_at, :admin_id, :amount_product, :product_id)";
            $stmt = $this->pdo->prepare($sql);

            // Log the SQL query and parameters for debugging
            error_log("Executing SQL: $sql");
            error_log("With data: " . print_r($data, true));

            // Insert a row for each product_id
            foreach ($data['product_ids'] as $index => $productId) {
                $stmt->execute([
                    ':firstName' => $data['firstName'],
                    ':lastName' => $data['lastName'],
                    ':phone' => $data['phone'],
                    ':order_status' => $data['order_status'],
                    ':total' => $data['total'],
                    ':address' => $data['address'],
                    ':buy_at' => $data['buy_at'],
                    ':admin_id' => $id,
                    ':amount_product' => $data['amount_products'][$index], // Store amount_product for each product
                    ':product_id' => $productId, // Insert each product_id in a separate row
                ]);
            }
            return true; // Return true if all rows are inserted successfully
        } catch (Exception $e) {
            error_log("Failed to create order: " . $e->getMessage());
            return false;
        }
    }

    function getUser()
    {
        $stmt = $this->pdo->query("SELECT * FROM admins");
        return $stmt->fetchAll();
    }
}
