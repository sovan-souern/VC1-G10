<?php
require_once __DIR__ . '/../../../Models/BrandModel.php';

$error = '';
$success = '';

try {
    $brandModel = new BrandModel();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_brand'])) {
        $brandName = $_POST['brand_name'];
        $brandContent = $_POST['brand_content'];
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

        $brandModel->addBrand($brandName, $brandContent, $brandImagePath);
        $success = 'Brand added successfully.';
    }

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
    <title>Add Brand</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card p-4">
            <h4>Add Brand</h4>
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php elseif ($success): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
            <form action="brand/store"  class="my-3" method="post" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label>Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Brand Content</label>
                        <textarea class="form-control mt-2 p-4" name="brand_content" style="height: 100px;" required></textarea>
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
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
