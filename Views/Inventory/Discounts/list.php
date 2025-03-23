

<style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
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
    font-family: Arial, sans-serif;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    padding: 10px;
  }

  .product-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    text-align: center;
    position: relative;
    padding: 15px;
    border: 2px solid transparent;
    transition: all 0.3s ease;
  }

  .product-card:hover {
    border-color: #6c63ff;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
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
  }

  .product-description {
    color: #666;
    margin: 0 0 12px 0;
    font-size: 0.9em;
    text-align: left;
    line-height: 1.4;
  }

  .price-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
    margin: 10px 0;
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

  .add-to-cart {
    background: #6c63ff;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 0.95em;
    font-weight: 600;
    transition: background 0.3s ease;
  }

  .add-to-cart:hover {
    background: #5753e0;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .page {
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
    }

    .product-card {
      padding: 12px;
    }

    .product-image {
      height: 180px;
    }
  }
</style>

  <!-- <div class="container mt-4">
    <div class="card p-4">

    
    </div>
  </div> -->



  <script>
    function addToCart() {
      alert('Product added to cart!');
    }
  </script>





<div class="container mt-4">
    <div class="card-page  ">
      <h4>Add Product</h4>
      <div class="page">
    
        
        <?php foreach ($discounts as $discount) : ?>
        <!-- <?php echo ($discount) ?> -->
        <div class="product-card">
          <img src="<?php echo ($discount["image"]) ?>" alt="Product Image" class="product-image">
          <div class="discount-badge"><?php echo ($discount["discount_percentage"]) ?>%</div>
          <h2 class="product-title"><?php echo ($discount["product_name"]) ?></h2>
          <!-- <p class="product-description"><?php echo ($discount["product_description"]) ?></p> -->
  
          <div class="price-container">
            <span class="discount-price">$800</span> <!-- Original Price -->
            <span class="price">$640</span> <!-- Discounted Price -->
          </div>
  
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      <?php endforeach ?>
      </div>

    </div>
</div>