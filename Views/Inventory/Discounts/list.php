
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
           <a href="/discount">Discount</a>/
           <a href="/discount/history">history</a>
          
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
         <?php if ($discount["end_date"] >= date("Y-m-d") ): ?>
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
              <a class="action-btn view-btn" href="discount/view?id=<?php echo $discount["product_id"]; ?>">
                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
              </a>
              <a class="action-btn edit-btn" href="discount/edit?id=<?php echo $discount["product_id"]; ?>">  
                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
              </a>
              <a class="action-btn delete-btn delete-product" href="discount/delete?id=<?php echo $discount["product_id"]; ?>">
                <img src="/Views/assets/img1/icons/delete.svg" alt="delete" >
              </a>
            </div>
          </div>
        <?php endif?>
        <?php endforeach; ?>
      </div>
      <div class="pagination" id="pagination">
        <button id="prevPage">Previous</button>
        <span id="pageInfo"></span>
        <button id="nextPage">Next</button>
      </div>
    </div>
  </div>
  <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmLabel">Confirm Deletion</h5>
                <i class="material-icons" data-bs-dismiss="modal" aria-label="Close">close</i>
            </div>
            <div class="modal-body text-dark">
                Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                <button id="confirmDeleteBtn" type="button" class="btn btn-danger">Yes, Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get all delete buttons
    const deleteButtons = document.querySelectorAll('.delete-product');
    let deleteUrl = '';

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            deleteUrl = this.getAttribute('href');

            // Show Bootstrap modal instead of default alert
            const modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
            modal.show();
        });
    });

    // Handle confirm delete button click
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        // Make AJAX request to delete
        fetch(deleteUrl, {
            method: 'GET' // or 'POST' depending on your backend
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Hide modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmModal'));
                modal.hide();

                // Show success alert
                alert('Product successfully deleted!');
                
                // Optionally remove the product card from the DOM
                const productCard = document.querySelector(`a[href="${deleteUrl}"]`).closest('.product-card');
                if (productCard) {
                    productCard.remove();
                }
            } else {
                alert('Error deleting product: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
  /* Container and Card Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.card-page {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Button Group Styling */
.items-per-page {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 15px 0;
}

/* Main Discount/History Buttons */
.items-per-page a {
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

/* Discount Button */
.items-per-page a[href="/discount"] {
    background: linear-gradient(45deg, #4CAF50, #81C784);
    color: white;
    box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
}

/* History Button */
.items-per-page a[href="/discount/history"] {
    background: linear-gradient(45deg, #2196F3, #64B5F6);
    color: white;
    box-shadow: 0 4px 15px rgba(33, 150, 243, 0.4);
}

/* Hover Effects for Main Buttons */
.items-per-page a:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    color: white;
}

/* Ripple Effect */
.items-per-page a::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s ease, height 0.6s ease;
}

.items-per-page a:hover::after {
    width: 200px;
    height: 200px;
}

/* Action Buttons (View/Edit/Delete) */
.action-buttons {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

/* Specific Action Button Styles */
.view-btn {
    background: linear-gradient(45deg, #2196F3, #42A5F5);
}

.edit-btn {
    background: linear-gradient(45deg, #FFB300, #FFD54F);
}

.delete-btn {
    background: linear-gradient(45deg, #F44336, #EF5350);
}

/* Action Button Hover Effects */
.action-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

/* Action Button Images */
.action-btn img {
    width: 20px;
    height: 20px;
    filter: brightness(0) invert(1); /* Makes icons white */
}

/* Pagination Buttons */
.pagination {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

.pagination button {
    padding: 8px 20px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(45deg, #4CAF50, #81C784);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.pagination button:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
}

.pagination button:disabled {
    background: #cccccc;
    cursor: not-allowed;
    box-shadow: none;
}

/* Modal Buttons */
.modal-footer .btn {
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary {
    background: linear-gradient(45deg, #2196F3, #42A5F5);
    border: none;
}

.btn-danger {
    background: linear-gradient(45deg, #F44336, #EF5350);
    border: none;
}

.modal-footer .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    .items-per-page {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .action-buttons {
        justify-content: center;
    }
    
    .pagination {
        flex-direction: column;
        gap: 10px;
    }
}
</style>