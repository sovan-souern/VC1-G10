<?php
require_once 'Models/OrderModel.php';
require_once 'BaseController.php';

class DepartmentController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new departmentModel();
    }

    function department()
    {
        $department = $this->model->getDepartments();
        $this->views('department/department.php', ['departments' => $department]);
    }
    function create()
    {
        // require_once 'Views/user/create.php';
        $this->views('department/create.php');
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name =  $_POST['name'];
            $description = $_POST['description'];
            $data = [
                'name' => $name,
                'description' => $description,
            ];
            $this->model->createDepartments($data);
            $this->redirect('/department');
        }
    }


    function edit($id)
    {
        $department = $this->model->getDepartment($id);
        // $this->views('department/edit.php',['department'=>$departments]);
        $this->views('department/edit.php',['department'=>$department]);
    }
    


    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
            ];
            $this->model->updateDepartment($id, $data);
            $this->redirect('/department');
        }
    }


    function destroy($id)
    {
        $this->model->deleteDepartment($id);
        $this->redirect('/department');
    }
}
