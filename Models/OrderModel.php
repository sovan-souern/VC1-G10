<?php
require_once 'Databases/database.php';

class DepartmentModel{
    private $pdo;
    function __construct()
    {
        $this->pdo = new Database();
    }
    
    function getDepartments()
    {
        $departments=$this->pdo->query("SELECT * FROM departments order by id DESC");
        return $departments->fetchAll();
    }




    function createDepartments($data)
{
    // Prepare the statement to insert both 'name' and 'description'
    $stmt = $this->pdo->query("INSERT INTO departments (name, description) VALUES (:name, :description)",[
        'name' => $data['name'],
        'description' => $data['description']]);
}

    function getDepartment($id)
    {
        $stmt = $this->pdo->query("SELECT * FROM departments WHERE id = :id", ['id'=> $id]);
        $department = $stmt->fetch();
        return $department;
    }
    function updateDepartment($id, $data)
    {
        // var_dump($data);
        // die();
        $stmt = $this->pdo->query("UPDATE departments SET name = :name, description = :description WHERE id = :id", [
            'name' => $data['name'],
            'description' => $data['description'],
            'id' => $id
        ]);

    }
    
    function deleteDepartment($id)
    {
        $stmt = $this->pdo->query("DELETE FROM departments WHERE id = :id", ['id' => $id]);
    }
}


