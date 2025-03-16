<?php
require_once 'Databases/database.php';

class BrandModel {
    private $conn;

    public function __construct() {
        $database = new Database('picture2'); // Connect to the 'picture2' database
        $this->conn = $database->getConnection();
    }

    public function getBrands() {
        $sql = "SELECT id, brand_name, image_url, description FROM brand"; // Correct column names
        $stmt = $this->conn->query($sql);

        $brands = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $brands[] = $row;
        }

        return $brands;
    }

    public function addBrand($brandID,$brandName, $brandDescription, $brandImageUrl) {
        $sql = "INSERT INTO brand (id , brand_name, description, image_url) VALUES (?, ?, ?)"; // Correct column names
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$brandID,$brandName, $brandDescription, $brandImageUrl]);
        return $this->conn->lastInsertId(); // Return the ID of the newly inserted brand
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>

