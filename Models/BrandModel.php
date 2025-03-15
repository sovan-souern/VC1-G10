<?php
require_once 'Databases/database.php';

class BrandModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getBrands() {
        $sql = "SELECT id, brand_name, image_path, description FROM brand";
        $stmt = $this->conn->query($sql);

        $brands = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $brands[] = $row;
        }

        return $brands;
    }

    public function addBrand($brandName, $brandDescription, $brandImagePath) {
        $sql = "INSERT INTO brand (brand_name, brand_description, image) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$brandName, $brandDescription, $brandImagePath]);
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>
