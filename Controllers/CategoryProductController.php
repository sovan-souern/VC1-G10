<?php
require_once 'Models/CategoryModel.php';
require_once 'BaseController.php';

class CategoryController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new CategoryModel();
    }

    function index()
    {
        $categories = $this->model->getCategories();
        $this->views('/Inventory/categories/category.php', ['categories' => $categories]);
    }

    function create()
    {
        $categories = $this->model->getCategories();
        $this->views('/Inventory/categories/create.php', ['categories' => $categories]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            // Handling Image Upload
            $image_url = null;
            if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0755, true); // Ensure upload directory exists
                }
                $image_name = time() . "_" . basename($_FILES['image']['name']);
                $target_file = $target_dir . $image_name;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    $image_url = $target_file;
                }
            }

            // Insert Data
            $data = [
                'category_name' => $category_name,
                'description' => $description,
                'image_url' => $image_url,
            ];

            $this->model->createCategories($data);
            $this->redirect('/category');
        }
    }
    function edit($id)
    {
        // $categories = $this->model->getCategory($id);
        // var_dump($_SERVER);
        $this->views('/Inventory/categories/edit.php');
    }

    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            // Get existing category data
            $existingCategory = $this->model->getCategory($id);
            $image_url = $existingCategory['image_url']; // Default to existing image

            // Handling Image Upload
            if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0755, true); // Ensure upload directory exists
                }
                $image_name = time() . "_" . basename($_FILES['image']['name']);
                $target_file = $target_dir . $image_name;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // If new image is uploaded, update image_url
                    $image_url = $target_file;

                    // Delete old image if it exists
                    if (!empty($existingCategory['image_url']) && file_exists($existingCategory['image_url'])) {
                        unlink($existingCategory['image_url']);
                    }
                }
            }

            // Update Data
            $data = [
                'category_name' => $category_name,
                'description' => $description,
                'image_url' => $image_url, // Keep old image if no new one uploaded
            ];

            $this->model->updateCategory($id, $data);
            $this->redirect('/category');
        }
    }
    function destroy($id)
    {
        $user = $this->model->getCategory($id);
        if (!empty($category['image_url'])) {
            $filePath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $user['image_url'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $this->model->deleteCategory($id);
        $this->redirect('/Category');
        //jub jub
    }
}
