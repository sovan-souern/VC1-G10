<?php
require_once 'Databases/database.php';

class CategoryModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getCategories()
    {
        $stmt = $this->pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }

    function createCategories($data)
    {
        $stmt = $this->pdo->query("INSERT INTO categories (category_name, description, image_url) VALUES (:category_name, :description, :image_url)",[
            'category_name' => $data['category_name'],
            'description' => $data['description'],
            'image_url' => $data['image_url'] ?? null
        ]);
    }

    function getCategory($id)
    {
        $stmt = $this->pdo->query("SELECT id, category_name, description, image_url FROM categories WHERE id = :id",['id' => $id]);
        return $stmt->fetch();
    }
    function updateCategory($id, $data)
    {
        $stmt = "UPDATE users SET name = :name, image_url = :image_url, description = :description WHERE id = :id";
        $this->pdo->query($stmt, [
            'name' => $data['name'],
            'image_url' => $data['image_url'],
            'description' => $data['description'],
            'id' => $id
        ]);
    }
}
