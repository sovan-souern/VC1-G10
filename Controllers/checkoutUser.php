<?php
require_once "Models/OrderModel.php";
require_once "Controllers/BaseController.php";
require_once "Models/ProductModel.php";
require_once "Models/NotificationModel.php";

class CheckoutUserController extends BaseController
{
  private $model;
  private $model_product;
  private $model_Notification;
  function __construct()
  {
    $this->model = new  OrderModel();
    $this->model_product = new  ProductModel();
    $this->model_Notification = new NotificationModel();
  }
  function cartview()
  {
    require_once 'Views/E-commerce-user/card/cart.php';
    // $this->ViewsUser('Views/E-commerce-user/card/cart.php');

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
  $this->ViewsUser('/E-commerce-user/card/checkout.php',[
    "users" => $users,
    "products" => $products,
    "admin_id" => $admin_id
  ]);
  }


  function store($id)
  {
    // Set the timezone to a valid timezone
    date_default_timezone_set('Asia/Ho_Chi_Minh'); // Replace with your actual timezone
    $products = $this->model_product->getProducts();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $productIds = $_POST['product_id'] ?? ''; 
      $productIdsArray = array_filter(explode(',', $productIds)); 
      $totalQuantity = count($productIdsArray); 

      error_log("Received product IDs: " . implode(',', $productIdsArray));

      $selectedProductIds = [];
      $amountProducts = [];
      if (!empty($_POST['items'])) {
        $items = is_array($_POST['items']) ? $_POST['items'] : json_decode($_POST['items'], true);

        if (is_array($items)) {
          foreach ($items as $item) {
            if (isset($item['image'])) {
              foreach ($products as $product) {
                if ($product["image"] == $item["image"]) {
                  $selectedProductIds[] = $product["product_id"];
                  $amountProducts[$product["product_id"]] = $item['quantity'] ?? 1; // Map product ID to quantity
                }
              }
            }
          }
        } else {
          error_log("Invalid items format.");
        }
      } else {
        error_log("No valid items received.");
      }

      // var_dump($_POST["last_name"]);
      $addressData = [
        'city' => $_POST['city'] ?? '',
        
        'admin_id' => $id,
        	'village'=>$_POST['village'],
        	'commune'=>$_POST['commune'],
          'district'=>$_POST['district'],
          'province'=>$_POST['province'],
        'country' => $_POST['country'] ?? ''
      ];

      $addressId = $this->model->createAddress($addressData);
      if (!$addressId) {
        echo "Failed to create address.";
        return; 
      }
      error_log("Selected Product IDs: " . implode(',', $selectedProductIds));

      $data = [
        'admin_id' => $id, 
        'phone' => $_POST['phone'] ?? '',
        'order_status' => $_POST['order_status'] ?? 'Pending',
        'total' => $_POST['total'] ?? '',
        'first_name' => $_POST['first_name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'buy_at' => date('Y-m-d H:i:s'),
        'product_ids' => $selectedProductIds, // Ensure this is an array of product IDs
        'amount_products' => $amountProducts, // Pass the quantity for each product
        'address_id' => $addressId // Pass the created address_id
      ];

      // Debugging: Log the data being passed to createOrder
      error_log("Data passed to createOrder: " . json_encode($data));
      
      $storeProduct = $this->model->createOrder($data, $id);

      if (!$storeProduct) {
          error_log("Failed to store product order.");
          echo "Failed to store product order.";
          return; 
      }

      $orderId = $storeProduct; 
      error_log("Order ID: " . $orderId); 

      $productCaculate = $this->model_product->getProducts();
      foreach ($selectedProductIds as $product_Id) {
          $amountProduct = $amountProducts[$product_Id] ?? 1; 
          foreach ($productCaculate as $product) {
              if ($product_Id == $product['product_id']) {
                  $this->model_product->updateProductQuantity($product['product_id'], $amountProduct); 
                  break; 
              }
          }
      }
      $users = $this->model->getUser();
      $name = null;
      foreach ($users as $user) {
          if ($id == $user['admin_id']) {
              $name = $user["name"]; 
          }
      }

      // Create a single notification for the last order
      $dataNotification = [
          'user_id' => $id,
          'product_id' => end($selectedProductIds), // Use the last product ID
          'order_id' => $orderId, 
          'created_at' => date('Y-m-d H:i:s'),
          'status' => "unread",
          'message' => "You have a new order from : $name",
          'type' => "order"
      ];
      $this->model_Notification->createOrderNotification($dataNotification);
    }
    $this->ViewsUser('/E-commerce-user/card/payment.php');
    // require_once 'Views/E-commerce-user/card/payment.php';
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