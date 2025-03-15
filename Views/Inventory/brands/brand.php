<?php
require_once __DIR__ . '/../../../Models/BrandModel.php';

$error = '';
$success = '';
$brands = [];

try {
    $brandModel = new BrandModel();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_brand'])) {
        $brandID = $_POST['brand_ID'];
        $brandName = $_POST['brand_name'];
        $brandDescription = $_POST['brand_description'];
        $brandImage = $_FILES['brand_image'];

        if (empty($brandName)) {
            throw new Exception('Brand name is required.');
        }

        // Handle file upload
        if ($brandImage['error'] == UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $uploadFile = $uploadDir . basename($brandImage['name']);
            if (move_uploaded_file($brandImage['tmp_name'], $uploadFile)) {
                $brandImagePath = 'uploads/' . basename($brandImage['name']);
            } else {
                throw new Exception('Failed to upload image.');
            }
        } else {
            throw new Exception('Image upload error.');
        }

        $brandModel->addBrand($brandName, $brandDescription, $brandImagePath);
        $success = 'Brand added successfully.';
    }

    $brands = $brandModel->getBrands();
    $brandModel->closeConnection();
} catch (Exception $e) {
    $error = $e->getMessage();
    error_log($error); // Log the error for debugging purposes
    if (isset($brandModel)) {
        $brandModel->closeConnection(); // Ensure the connection is closed in case of an error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand List</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .brand-list, .add-brand-form {
            margin-bottom: 20px;
        }
        .brand-list table {
            width: 100%;
        }
        .brand-list th, .brand-list td {
            padding: 8px;
            text-align: left;
        }
        .image-uploads {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #ddd;
            padding: 20px;
            cursor: pointer;
        }
        .image-uploads img {
            max-width: 50px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="card p-4">
            <!-- <h4>Add Brand</h4> -->
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php elseif ($success): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
            <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand List</h4>
                <h6>Manage your Brand</h6>
            </div>
            <div class="page-btn">
                <a href="brand/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" class="me-2" alt="img">Add Brand
                </a>
            </div>
        </div>
            <!-- <form class="my-3" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label>Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Brand Description</label>
                        <textarea class="form-control mt-2 p-4" name="brand_description" style="height: 100px;" required></textarea>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label>Brand Image</label>
                            <div class="image-upload">
                                <input type="file" name="brand_image" required>
                                <div class="image-uploads">
                                    <img src="/Views/assets/img1/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="add_brand" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-warning" onclick="window.history.back();">Back</button>
                    </div>
                </div>
            </form> -->
        </div>
        <div class="brand-list">
            <h4>Brand List</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($brands)): ?>
                            <?php foreach ($brands as $brand): ?>
                                <tr>
                                    <td><?php echo $brand['id']; ?></td>
                                    <td><img src="<?php echo $brand['image_url']; ?>" alt="Brand Image" style="width: 50px;"></td>
                                    <td><?php echo $brand['brand_name']; ?></td>
                                    <td><?php echo $brand['description']; ?></td>
                                    <td>
                                    <!-- icon                                     -->
                                    <a class="me-3" href="products/view">
                                        <img src="/Views/assets/img1/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="products/edit">
                                        <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="products/">
                                        <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                    </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">No brands found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
