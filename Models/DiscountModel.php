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
    function getProducts()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM products ');
            return $stmt->fetchAll();
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

    function getDiscounts()
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
            LEFT JOIN brand ON products.brand_id = brand.id
            ORDER BY discounts.created_at DESC");

            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching discounts: " . $e->getMessage());
        }
    }
    function getDiscount($id)
    {
        //   var_dump($id );
        $stmt = $this->pdo->query('SELECT * FROM discounts WHERE product_id = :id', ['id' => $id]);
        return $stmt->fetch();
    }
    function updateDiscount($data)
    {
        try {
            $stmt = "UPDATE discounts SET discount_percentage = :discount_percentage, start_date = :start_date, end_date = :end_date, updated_at = :updated_at WHERE product_id = :product_id";
            $this->pdo->query($stmt, [
                'product_id' => $data['product_id'],
                'discount_percentage' => $data['discount_percentage'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'updated_at' => $data['updated_at']
            ]);
            return true;
        } catch (Exception $e) {
            echo "Error updating discount: " . $e->getMessage();
            return false;
        }
    }
    function delete($id)
    {
        try {
            $stmt = "DELETE FROM discounts WHERE product_id = :id";
            $this->pdo->query($stmt, ['id' => $id]);
            return true;
        } catch (Exception $e) {
            echo "Error deleting discount: " . $e->getMessage();
            return false;
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
    function getBrands()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM brand');
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Error fetching brands: " . $e->getMessage());
        }
    }
    function discountCategory($id) // Fixed method name
    {
        // var_dump($id);
        try {
            $stmt = $this->pdo->query('SELECT * FROM categories where category_id = :id', ['id' => $id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            die("Error fetching categories: " . $e->getMessage());
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/main
    function discountBrand($id) // Fixed method name
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM brand where id = :id', ['id' => $id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            die("Error fetching brands: " . $e->getMessage());
        }
    }
<<<<<<< HEAD
>>>>>>> feature/user-home
=======
>>>>>>> origin/main
}