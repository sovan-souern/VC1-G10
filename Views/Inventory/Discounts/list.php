
  <?php require "style.php"?>
 <?php require __DIR__."/../../assets/js/discount.php"?>

  <div class="container">
    <div class="card-page">
      <h4>Discount List</h4>
      <div class="serch-group">

        <div class="search-set">
          <div class="search-path">
            <a class="btn btn-filter" id="filter_search">
              <img src="/Views/assets/img1/icons/filter.svg" alt="Filter">
              <span><img src="/Views/assets/img1/icons/closes.svg" alt="Close"></span>
            </a>
          </div>
          <div class="search-input">
            <form class="form-inline" onsubmit="return false;">
              <input id="brandSearch" class="form-control mr-sm-2" type="search" placeholder="Search Brand Name" aria-label="Search">
            </form>
          </div>
          
        </div>
        <div class="items-per-page">
          <label for="itemsPerPage">Show</label>
          <select id="itemsPerPage">
            <option value="1000">All</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
          </select>
        </div>
      </div>
      <div id="filter_inputs">
        <input type="text" placeholder="Min Price">
        <input type="text" placeholder="Max Price">
      </div>
      <div class="page" id="productPage">
        <?php

        foreach ($discounts as $discount) : ?>
          <div class="product-card">
            <?php if (!empty($discount["image"])) : ?>
              <img src="<?php echo htmlspecialchars($discount["image"]); ?>" alt="Product Image" class="product-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
              <div class="product-image-fallback" style="display: none;">Image Not Available</div>
            <?php else : ?>
              <div class="product-image-fallback">Image Not Available</div>
            <?php endif; ?>
            <div class="discount-badge"><?php echo ($discount["discount_percentage"]); ?>%</div>
            <h2 class="product-title"><?php echo htmlspecialchars($discount["product_name"]); ?></h2>
            <div class="price-container">
              <span class="discount-price">$<?php echo number_format($discount["price"], 2); ?></span>
              <span class="price">
                $<?php echo number_format($discount["price"] * (1 - $discount["discount_percentage"] / 100), 2); ?>
              </span>
            </div>
            <div class="action-buttons">
              <a class="action-btn view-btn" href="products/view?id=<?php echo $discount["product_id"]; ?>">
                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
              </a>
              <a class="action-btn edit-btn" href="discount/edit?id=<?php echo $discount["product_id"]; ?>">  
                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
              </a>
              <a class="action-btn delete-btn delete-product" href="discount/delete?id=<?php echo $discount["product_id"]; ?>">
                <img src="/Views/assets/img1/icons/delete.svg" alt="delete">
                <?php require "delete.php" ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="pagination" id="pagination">
        <button id="prevPage">Previous</button>
        <span id="pageInfo"></span>
        <button id="nextPage">Next</button>
      </div>
    </div>
  </div>

