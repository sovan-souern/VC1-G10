<?php
require_once 'Databases/database.php';

class EmployeesModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getDepartment()
    {
        $stmt = $this->pdo->query("SELECT * FROM departments");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function getEmployees()
    {
        $stmt = $this->pdo->query("SELECT employees.*, departments.name AS department_name
                               FROM employees
                               LEFT JOIN departments ON employees.department_id = departments.id
                               ORDER BY employees.id DESC");

        return $stmt->fetchAll();
    }
    function createEmployee($data)
    {
        $stmt = $this->pdo->query("INSERT INTO employees (name, email, phone, department_id) VALUES (:name, :email, :phone,  :department_id)", ([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department_id' => $data['department_id']
        ]));
    }
    function getEmployee($id)
    {

        $stmt = $this->pdo->query("SELECT * FROM employees WHERE id = :id", ['id' => $id]);
        $employees = $stmt->fetch();
        return $employees;
    }
    function updateEmployees($id, $data)
    {
        $stmt = $this->pdo->query("UPDATE employees SET name = :name, email = :email, phone = :phone, department_id = :department_id WHERE id = :id", [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department_id' => $data['department_id'],
            'id' => $id
        ]);
    }

    function deleteEmployee($id)
    {
        $stmt = $this->pdo->query("DELETE FROM employees WHERE id = :id", ['id' => $id]);
    }
}
