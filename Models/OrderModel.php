<?php
require_once 'Databases/database.php';

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = (new Database())->getConnection();
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
                    ':address_id' => $data['address_id'] 
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
        try {
            $stmt = $this->pdo->query("SELECT * FROM admins");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Failed to fetch admins: " . $e->getMessage());
            return [];
        }
    }

    function createAddress($data)
    {
        try {
            $sql = "INSERT INTO address (city, admin_id, country, create_at, village, commune, district, province) 
                    VALUES (:city, :admin_id, :country, :create_at, :village, :commune, :district, :province)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':city' => $data['city'],
                ':admin_id' => $data['admin_id'],
                // ':address_text' => $data['address_text'],
                ':country' => $data['country'],
                ':village'=>$data['village'],
                ':commune'=>$data['commune'],
              ':district'=>$data['district'],
              ':province'=>$data['province'],
                ':create_at' => date('Y-m-d H:i:s') 
            ]);

            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            error_log("Failed to create address: " . $e->getMessage());
            return false;
        }
    }
}