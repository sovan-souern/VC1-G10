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
            $sql = "INSERT INTO orders (firstName, lastName, phone, order_status, total, buy_at, admin_id, amount_product, product_id, address_id) 
                    VALUES (:firstName, :lastName, :phone, :order_status, :total, :buy_at, :admin_id, :amount_product, :product_id, :address_id)";
            $stmt = $this->pdo->prepare($sql);

            // Insert a row for each product_id
            foreach ($data['product_ids'] as $index => $productId) {
                $stmt->execute([
                    ':firstName' => $data['firstName'],
                    ':lastName' => $data['lastName'],
                    ':phone' => $data['phone'],
                    ':order_status' => $data['order_status'],
                    ':total' => $data['total'],
                    ':buy_at' => $data['buy_at'],
                    ':admin_id' => $id,
                    ':amount_product' => $data['amount_products'][$index],
                    ':product_id' => $productId,
                    ':address_id' => $data['address_id'] // Use the address_id from the created address
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

    function createAddress($data)
    {
        try {
            $sql = "INSERT INTO address (city, admin_id, address_text, country, create_at) 
                    VALUES (:city, :admin_id, :address_text, :country, :create_at)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':city' => $data['city'],
                ':admin_id' => $data['admin_id'],
                ':address_text' => $data['address_text'],
                ':country' => $data['country'],
                ':create_at' => date('Y-m-d H:i:s') 
            ]);

            return $this->pdo->lastInsertId(); // Return the newly created address_id
        } catch (Exception $e) {
            error_log("Failed to create address: " . $e->getMessage());
            return false;
        }
    }
    
}
