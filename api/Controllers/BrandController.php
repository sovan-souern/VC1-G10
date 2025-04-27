<?php
require_once 'Models/BrandModel.php';
require_once 'BaseController.php';

class BrandController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new BrandModel();
    }

    function index()
    {
        $brands = $this->model->getBrands();
        $this->views('/Inventory/brands/brand.php', ["brands" => $brands]);
    }

    function create()
    {
        $this->views('/Inventory/brands/create.php');
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imagePath = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $imagePath = $target_dir . basename($_FILES['image']['name']);
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    echo "Error: Failed to upload image.";
                    return;
                }
            }

            $data = [
                'brand_name' => $_POST['brand_name'],
                'description' => $_POST['description'],
                'brand_image' => $imagePath,
            ];
            $this->model->createBrand($data);
            $this->redirect('/brand');
        }
    }

    function edit($id)
    {
        $brand = $this->model->getBrand($id);
        $this->views('/Inventory/brands/edit.php', ["brand" => $brand]);
    }

    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imagePath = $_POST['existing_image'];
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $imagePath = $target_dir . basename($_FILES['image']['name']);
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    echo "Error: Failed to upload image.";
                    return;
                }
            }
            $data = [
                'id' => $_POST['id'],
                'brand_name' => $_POST['brand_name'],
                'description' => $_POST['description'],
                'brand_image' => $imagePath,
            ];
            $this->model->updateBrand($data);
            $this->redirect('/brand');
        }
    }

    function destroy($id)
    {
        // echo "Delete brand with id: $id";
        $this->model->deleteBrand($id);
        $this->redirect('/brand');
    }
}
