<?php
require_once 'Models/EmployeeModel.php';
require_once 'BaseController.php';

class EmployeeController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new EmployeesModel();
    }

    function index()
    {
        $employee = $this->model->getEmployees();
        $this->views('employees/employee.php', ['employees' => $employee]);
    }

    function create()
    {
        $departments = $this->model->getDepartment();
        $this->views('employees/create.php', ['departments' => $departments]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'department_id' => $_POST['department_id']
            ];
            $this->model->createEmployee($data);
            $this->redirect('/employee');
        }
    }
    
    function edit($id)
    {
        $employee = $this->model->getEmployee($id);
        $departments = $this->model->getDepartment();
        $this->views('employees/edit.php', ['employee' => $employee, 'departments' => $departments]);
    }

    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'department_id' => $_POST['department_id']
            ];

            $this->model->updateEmployees($id, $data);
            $this->redirect('/employee');
        }
    }

    function destroy($id)
    {
        $this->model->deleteEmployee($id);
        $this->redirect('/employee');
    }
}
