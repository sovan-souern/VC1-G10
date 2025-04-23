<?php
require_once "Models/OrderModel.php";
require_once "Controllers/BaseController.php";
require_once "Models/ProductModel.php";

class CheckoutUserController extends BaseController
{
    private $model;
    private $model_product;

    function __construct()
    {
        $this->model = new OrderModel();
        $this->model_product = new ProductModel();
    }

    function cartview()
    {
        require_once 'Views/E-commerce-user/card/cart.php';
    }

    function ProductCheckout()
    {
        $products = $this->model_product->getProducts();
        $users = $this->model->getUser();
        $admin_id = $users[0]['admin_id'] ?? null;

        extract([
            "users" => $users,
            "products" => $products,
            "admin_id" => $admin_id
        ]);
        require_once 'Views/E-commerce-user/card/checkout.php';
    }

    function store($id)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return json_encode(['status' => 'error', 'message' => 'Invalid request method']);
        }

        // Validation rules
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:100',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'delivery_notes' => 'nullable|string',
            'items' => 'required|string', // Expect JSON string
            'total' => 'required|numeric|min:0',
            'product_id' => 'nullable|string',
            'payment_method' => 'required|string|in:aba,acleda,wing',
            'contact_method' => 'required|string|in:phone,telegram,facebook',
            'order_status' => 'nullable|string|in:Pending,Processing,Completed,Cancelled',
            'buy_at' => 'required|date',
        ];

        // Validate inputs
        $data = $_POST;
        $validator = $this->validate($data, $rules);
        if ($validator['fails']) {
            return json_encode([
                'status' => 'error',
                'errors' => $validator['errors']
            ], JSON_PRETTY_PRINT);
        }

        // Parse items JSON
        $items = json_decode($data['items'], true);
        if (!is_array($items) || empty($items)) {
            return json_encode([
                'status' => 'error',
                'message' => 'Invalid or empty cart items'
            ], JSON_PRETTY_PRINT);
        }

        // Process product IDs
        $productIds = !empty($data['product_id']) ? array_filter(explode(',', $data['product_id'])) : [];
        $selectedProductIds = [];
        foreach ($items as $item) {
            if (isset($item['id'])) {
                $selectedProductIds[] = $item['id'];
            }
        }
        $selectedProductIds = array_unique(array_merge($productIds, $selectedProductIds));

        // Create address
        $addressData = [
            'city' => $data['city'],
            'admin_id' => $id,
            'address_text' => $data['address'],
            'country' => $data['country']
        ];
        $addressId = $this->model->createAddress($addressData);
        if (!$addressId) {
            return json_encode([
                'status' => 'error',
                'message' => 'Failed to create address'
            ], JSON_PRETTY_PRINT);
        }

        // Prepare order data
        $orderData = [
            'admin_id' => $id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'country' => $data['country'],
            'address' => $data['address'],
            'city' => $data['city'],
            'postal_code' => $data['postal_code'],
            'delivery_notes' => $data['delivery_notes'] ?? null,
            'items' => $data['items'], // JSON string
            'total' => $data['total'],
            'product_id' => implode(',', $selectedProductIds), // Comma-separated string
            'payment_method' => $data['payment_method'],
            'contact_method' => $data['contact_method'],
            'order_status' => $data['order_status'] ?? 'Pending',
            'buy_at' => $data['buy_at']
        ];

        // Store order
        $orderId = $this->model->createOrder($orderData);
        if ($orderId) {
            return json_encode([
                'status' => 'success',
                'message' => 'Order created successfully',
                'order_id' => $orderId
            ], JSON_PRETTY_PRINT);
        } else {
            return json_encode([
                'status' => 'error',
                'message' => 'Failed to create order'
            ], JSON_PRETTY_PRINT);
        }
    }

    function favorite()
    {
        require_once 'Views/E-commerce-user/card/favorite.php';
    }

    // Helper method for validation
    private function validate($data, $rules)
    {
        $errors = [];
        foreach ($rules as $field => $rule) {
            $value = $data[$field] ?? null;
            $ruleParts = explode('|', $rule);

            foreach ($ruleParts as $part) {
                if ($part === 'required' && empty($value)) {
                    $errors[$field][] = "$field is required";
                }
                if (strpos($part, 'max:') === 0 && strlen($value) > (int)substr($part, 4)) {
                    $errors[$field][] = "$field exceeds maximum length";
                }
                if ($part === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $errors[$field][] = "$field must be a valid email";
                }
                if ($part === 'numeric' && !is_numeric($value)) {
                    $errors[$field][] = "$field must be numeric";
                }
                if (strpos($part, 'min:') === 0 && (float)$value < (float)substr($part, 4)) {
                    $errors[$field][] = "$field must be at least " . substr($part, 4);
                }
                if (strpos($part, 'in:') === 0 && !in_array($value, explode(',', substr($part, 3)))) {
                    $errors[$field][] = "$field must be one of: " . substr($part, 3);
                }
                if ($part === 'date' && !strtotime($value)) {
                    $errors[$field][] = "$field must be a valid date";
                }
            }
        }
        return [
            'fails' => !empty($errors),
            'errors' => $errors
        ];
    }
}