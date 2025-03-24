<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discount Page</title>
  <?php require "style.php"?>
</head>

<body>
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
        <!-- PHP loop to render product cards -->
        <?php
        // Sample data based on the screenshot
       

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
        <?php endforeach; ?>
      </div>
      <div class="pagination" id="pagination">
        <button id="prevPage">Previous</button>
        <span id="pageInfo"></span>
        <button id="nextPage">Next</button>
      </div>
    </div>
  </div>

  <script>document.addEventListener('DOMContentLoaded', function() {
    const itemsPerPageSelect = document.getElementById('itemsPerPage');
    const productPage = document.getElementById('productPage');
    const productCards = Array.from(productPage.querySelectorAll('.product-card'));
    const prevPageBtn = document.getElementById('prevPage');
    const nextPageBtn = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');
    const searchInput = document.getElementById('brandSearch');
    const filterButton = document.getElementById('filter_search');
    const filterInputs = document.getElementById('filter_inputs');

    let currentItemsPerPage = parseInt(itemsPerPageSelect.value) || 10;
    let currentPage = 1;
    let filteredCards = [...productCards];

    // Function to update the display of product cards
    function updateDisplay() {
        const totalItems = filteredCards.length;
        const totalPages = Math.max(1, Math.ceil(totalItems / currentItemsPerPage));
        currentPage = Math.min(Math.max(1, currentPage), totalPages);

        const start = (currentPage - 1) * currentItemsPerPage;
        const end = Math.min(start + currentItemsPerPage, totalItems);

        // Show/hide cards based on current page
        productCards.forEach(card => {
            const index = filteredCards.indexOf(card);
            card.style.display = (index >= start && index < end) ? 'block' : 'none';
        });

        // Update pagination info
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
        prevPageBtn.disabled = currentPage === 1;
        nextPageBtn.disabled = currentPage === totalPages || totalItems === 0;
    }

    // Items per page change handler
    itemsPerPageSelect.addEventListener('change', function() {
        currentItemsPerPage = parseInt(this.value);
        currentPage = 1;
        updateDisplay();
    });

    // Pagination button handlers
    prevPageBtn.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            updateDisplay();
        }
    });

    nextPageBtn.addEventListener('click', function() {
        if (currentPage < Math.ceil(filteredCards.length / currentItemsPerPage)) {
            currentPage++;
            updateDisplay();
        }
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();
        filteredCards = productCards.filter(card => {
            const productTitle = card.querySelector('.product-title').textContent.toLowerCase();
            return productTitle.includes(searchTerm);
        });
        currentPage = 1;
        updateDisplay();
    });

    // Filter toggle
    filterButton.addEventListener('click', function() {
        filterInputs.classList.toggle('show-filters');
    });

    // Initial display update
    updateDisplay();
});

// Toggle like button functionality
function toggleLike(button) {
    let img = button.querySelector("img");
    if (button.classList.contains("liked")) {
        img.src = "/Views/assets/img1/icons/like.svg";
        button.classList.remove("liked");
    } else {
        img.src = "/Views/assets/img1/icons/liked.svg";
        button.classList.add("liked");
    }
}</script>
</body>

</html>