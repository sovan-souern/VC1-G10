<?php
require_once 'Databases/database.php';

class BrandModel {
    private $pdo;

    function __construct() {
        $this->pdo = new Database(); 
    }

    function getBrands() {
        $stmt = $this->pdo->query('SELECT * FROM brand');
        return $stmt->fetchAll();
    }

    function createBrand($data) {
        $stmt = "INSERT INTO brand (brand_name, brand_image, description) 
                 VALUES (:brand_name, :brand_image, :description)";
        $this->pdo->query($stmt, [
            'brand_name' => $data['brand_name'],
            'brand_image' => $data['brand_image'],
            'description' => $data['description'],
        ]);
    }

    function getBrand($id) {
        $stmt = $this->pdo->query('SELECT * FROM brand WHERE id = :id', ['id' => $id]);
        return $stmt->fetch();
    }

    function updateBrand($data) {
        $stmt = "UPDATE brand SET brand_name = :brand_name, brand_image = :brand_image, description = :description WHERE id = :id";
        $this->pdo->query($stmt, [
            'brand_name' => $data['brand_name'],
            'brand_image' => $data['brand_image'],
            'description' => $data['description'],
            'id' => $data['id'],
        ]);
    }

    function deleteBrand($id) {
        $stmt = $this->pdo->query('DELETE FROM brand WHERE id = :id', ['id' => $id]);
    }

}
?>

