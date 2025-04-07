<?php
session_start();
require_once "Database/beauty_store.php"; // Adjust path to your database connection file

header('Content-Type: application/json');

$response = ['status' => 'error', 'message' => '', 'new_quantity' => 0];

try {
    // Check if the request is valid
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }

    // Get the product ID and quantity from the request
    $data = json_decode(file_get_contents('php://input'), true);
    $product_id = isset($data['product_id']) ? intval($data['product_id']) : 0;
    $quantity_purchased = isset($data['quantity']) ? intval($data['quantity']) : 0;

    if ($product_id <= 0 || $quantity_purchased <= 0) {
        throw new Exception('Invalid product ID or quantity.');
    }

    // Fetch the current stock quantity
    $stmt = $pdo->prepare("SELECT quantity FROM products WHERE product_id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        throw new Exception('Product not found.');
    }

    $current_quantity = intval($product['quantity']);
    $new_quantity = $current_quantity - $quantity_purchased;

    if ($new_quantity < 0) {
        throw new Exception('Insufficient stock available.');
    }

    // Update the stock quantity in the database
    $update_stmt = $pdo->prepare("UPDATE products SET quantity = ? WHERE product_id = ?");
    $update_stmt->execute([$new_quantity, $product_id]);

    $response['status'] = 'success';
    $response['message'] = 'Stock updated successfully.';
    $response['new_quantity'] = $new_quantity;

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
exit;
?>