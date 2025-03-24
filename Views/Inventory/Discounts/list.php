<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discount Page</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      overflow-x: hidden; /* Prevent horizontal overflow */
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .card-page {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 20px;
      margin: 20px 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-page h4 {
      margin: 0 0 20px 0;
      color: #333;
      font-size: 1.5em;
    }

    .page {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Default layout */
      gap: 15px;
      padding: 10px;
      max-width: 100%;
    }

    /* 4 Cards Per Row for Computer Screens */
    @media (min-width: 1024px) {
      .page {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .product-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: relative;
      border: 2px solid transparent;
      transition: all 0.3s ease;
      padding: 15px;
      min-width: 200px;
    }

    .product-card:hover {
      border-color: #6c63ff;
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .product-image {
      width: 100%;
      height: auto;
      max-height: 150px;
      object-fit: cover;
      border-radius: 8px 8px 0 0;
      margin-bottom: 12px;
    }

    .discount-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: linear-gradient(135deg, #ff6b6b, #ff3f3f);
      color: white;
      padding: 5px 10px;
      border-radius: 12px;
      font-weight: bold;
      font-size: 0.85em;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transform: rotate(5deg);
    }

    .product-title {
      font-size: 1.2em;
      margin: 0 0 8px 0;
      color: #333;
      text-align: left;
      font-weight: 600;
      padding: 0 15px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .price-container {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      gap: 10px;
      margin: 10px 0;
      padding: 0 15px;
    }

    .price {
      font-size: 1.2em;
      color: #333;
      font-weight: bold;
    }

    .discount-price {
      font-size: 1em;
      color: #ff3f3f;
      text-decoration: line-through;
      opacity: 0.8;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .action-btn {
      background: #fff;
      border: 2px solid #ddd;
      border-radius: 8px;
      padding: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      transition: all 0.3s ease;
    }

    .action-btn img {
      width: 24px;
      height: 24px;
    }

    .action-btn:hover {
      border-color: #6c63ff;
      background: rgba(108, 99, 255, 0.1);
    }

    .like-btn {
      background: #fff;
      border: 2px solid #ddd;
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .like-btn img {
      width: 24px;
      height: 24px;
    }

    .like-btn:hover {
      background: #ffebee;
      border-color: #ff3f3f;
    }

    .like-btn.liked {
      background: #ffebee;
      border-color: #ff3f3f;
    }

    .like-btn.liked img {
      filter: drop-shadow(0 0 5px #ff3f3f);
    }

    /* Responsive Adjustments */
    @media (max-width: 1023px) {
      .page {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      }
    }

    @media (max-width: 480px) {
      .page {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <script>
    function toggleLike(button) {
      let img = button.querySelector("img");

      if (button.classList.contains("liked")) {
        img.src = "/Views/assets/img1/icons/like.svg";
        button.classList.remove("liked");
      } else {
        img.src = "/Views/assets/img1/icons/liked.svg";
        button.classList.add("liked");
      }
    }
  </script>
</head>

<body>

  <div class="container">
    <div class="card-page">
      <h4>Add Product</h4>
      <div class="page">

        <?php foreach ($discounts as $discount) : ?>
          <div class="product-card">
            <img src="<?php echo ($discount["image"]) ?>" alt="Product Image" class="product-image">
            <div class="discount-badge"><?php echo ($discount["discount_percentage"]) ?>%</div>
            <h2 class="product-title"><?php echo ($discount["product_name"]) ?></h2>

            <div class="price-container">
              <span class="discount-price"><?=$discount["price"]?></span>
              <span class="price">
  $<?= number_format($discount["price"] * (1 - $discount["discount_percentage"] / 100), 2) ?>
</span>
            </div>

            <div class="action-buttons">
              <a class="action-btn view-btn" href="products/view">
                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
              </a>
              <a class="action-btn edit-btn" href="products/edit">
                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
              </a>
              <a class="action-btn delete-btn" href="products/delete">
                <img src="/Views/assets/img1/icons/delete.svg" alt="delete">
              </a>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>

</body>

</html>
