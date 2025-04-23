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
    $this->model = new  OrderModel();
    $this->model_product = new  ProductModel();
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
  // require_once 'Views/E-commerce-user/card/checkout.php';
  $this->ViewsUser('/E-commerce-user/card/checkout.php',[
    "users" => $users,
    "products" => $products,
    "admin_id" => $admin_id
  ]);
  }


  function store($id)
  {
    
    // var_dump($_POST['total']);
    $products = $this->model_product->getProducts();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $productIds = $_POST['product_id'] ?? ''; // Get product IDs from the form
      $productIdsArray = array_filter(explode(',', $productIds)); // Split and filter valid product IDs
      $totalQuantity = count($productIdsArray); // Count the number of valid products

      // Log the received product IDs for debugging
      error_log("Received product IDs: " . implode(',', $productIdsArray));

      // Extract matching product IDs based on images
      $selectedProductIds = [];
      if (!empty($_POST['items'])) {
        $items = is_array($_POST['items']) ? $_POST['items'] : json_decode($_POST['items'], true);

        if (is_array($items)) {
          foreach ($items as $item) {
            if (isset($item['image'])) {
              foreach ($products as $product) {
                if ($product["image"] == $item["image"]) {
                  $selectedProductIds[] = $product["product_id"];
                 
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

      $amountProducts = array_map(function ($item) {
        return $item['quantity'] ?? 1; // Default to 1 if quantity is not provided
      }, $items);

      $addressData = [
        'city' => $_POST['city'] ?? '',
        'admin_id' => $id,
        	'village'=>$_POST['village'],
        	'commune'=>$_POST['commune'],
          'district'=>$_POST['district'],
          'province'=>$_POST['province'],
        // 'address_text' => $_POST['address'] ?? '',
        'country' => $_POST['country'] ?? ''
      ];

      // Create the address and get its ID
      $addressId = $this->model->createAddress($addressData);
      if (!$addressId) {
        echo "Failed to create address.";
        return; 
      }

      $data = [
        'admin_id' => $id, // Ensure admin_id is included in the data array
        'firstName' => $_POST['first_name'] ?? '',
        'lastName' => $_POST['last_name'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'order_status' => $_POST['order_status'] ?? 'Pending',
        'total' => $_POST['total'] ?? '',
        // 'address' => $_POST['address'] ?? '',
        'buy_at' => $_POST['buy_at'] ?? date('Y-m-d H:i:s'),
        'amount_products' => $amountProducts, // Pass amount_product for each product
        'product_ids' => $selectedProductIds, // Pass product IDs as an array
        'address_id' => $addressId // Pass the created address_id
      ];
      
      $storeProduct=$this->model->createOrder($data,$id);
      $productCaculate=$this->model_product->getProducts();
      foreach ($selectedProductIds as $index => $product_Id) {
        foreach ($productCaculate as $product) {
          if ($product_Id == $product['product_id']) {
            $amountProduct = $amountProducts[$index] ?? 1; // Match amountProduct by index
            echo $amountProduct ;
            // Use updateProductQuantity to only update the quantity field
            $this->model_product->updateProductQuantity($product['product_id'], $amountProduct);
            break; 
          }
        }
      }

    }
  }




  function favorite()
  {
    // $this->ViewsUser('/E-commerce-user/card/favorite.php');
    require_once 'Views/E-commerce-user/card/favorite.php';
  }
}
