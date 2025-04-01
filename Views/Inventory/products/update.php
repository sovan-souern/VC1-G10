<?php
// Include database connection
require_once '../../../config/database.php';

// Check if a new image is uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    // Handle the new image upload
    $imagePath = 'path/to/upload/directory/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
} else {
    // Retain the old image
    $imagePath = $_POST['old_image'];
}

// Update the product in the database
$product_id = $_GET['id'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];
$brand_id = $_POST['brand_id'];
$product_content = $_POST['product_content'];

// Prepare and execute the update query
$query = "UPDATE products SET product_name = ?, quantity = ?, price = ?, category_id = ?, brand_id = ?, product_content = ?, image = ? WHERE product_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("sidsissi", $product_name, $quantity, $price, $category_id, $brand_id, $product_content, $imagePath, $product_id);
$stmt->execute();

// Redirect to the products page
header("Location: /products");
exit();
?>