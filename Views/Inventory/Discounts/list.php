<?php require "style.php"?>
<?php require __DIR__ . "/../../assets/js/discount.php" ?>

<div class="container">
    <div class="card-page">
        <div class="card-header">
            <h4>Discount History</h4>
            <div class="create-discount-container">
                <a href="javascript:void(0)" class="btn btn-primary" id="createDiscountBtn">+ Create Discount</a>
                <div id="createDiscountForm" class="discount-form-aside" style="display: none;">
                    <div class="form-group">
                        <label for="categorySelect">Create by</label>
                        <select id="categorySelect" name="category" class="form-control">
                            <option value=""> Choose Option </option>
                            <option value="discount/product">Product</option>
                            <option value="discount/category">Category</option>
                            <option value="discount/brand">Brand</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
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
            
            <div class="items-per-page" style="display: flex; align-items: center; gap: 20px;">
                <div class="tab-buttons">
                    <a href="/discount" class="tab-btn">Discount</a>
                    <a href="/discount/history" class="tab-btn active">history</a>
                </div>
                <div>
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
        </div>
        <div id="filter_inputs">
            <input type="text" placeholder="Min Price">
            <input type="text" placeholder="Max Price">
        </div>
        <div class="page" id="productPage">
            <?php foreach ($discounts as $discount) : ?>
              <?php if ($discount["end_date"] >= date("Y-m-d") ): ?>
                    <div class="product-card">
                        <?php if (!empty($discount["image"])) : ?>
                            <img src="../../../<?php echo htmlspecialchars($discount["image"]); ?>" alt="Product Image" class="product-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="product-image-fallback" style="display: none;">Image Not Available</div>
                        <?php else : ?>
                            <div class="product-image-fallback">Image Not Available</div>
                        <?php endif; ?>
                        <div class="discount-badge"><?php echo htmlspecialchars($discount["discount_percentage"]); ?>%</div>
                        <h2 class="product-title"><?php echo htmlspecialchars($discount["product_name"]); ?></h2>
                        <div class="price-container">
                            <span class="discount-price">$<?php echo number_format($discount["price"], 2); ?></span>
                            <span class="price">
                                $<?php echo number_format($discount["price"] * (1 - $discount["discount_percentage"] / 100), 2); ?>
                            </span>
                        </div>
                        <div class="action-buttons">
                            <a class="action-btn view-btn" href="/discount/view?id=<?php echo $discount["product_id"]; ?>">
                                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
                            </a>
                            <a class="action-btn edit-btn" href="/discount/edit?id=<?php echo $discount["product_id"]; ?>">
                                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
                            </a>
                            <a class="action-btn delete-btn delete-product" href="/discount/delete?id=<?php echo $discount["product_id"]; ?>">
                                <img src="/Views/assets/img1/icons/delete.svg" alt="delete">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
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
    document.addEventListener('DOMContentLoaded', function () {
        // Existing delete button functionality
        const deleteButtons = document.querySelectorAll('.delete-product');
        let deleteUrl = '';

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                deleteUrl = this.getAttribute('href');

                const modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
                modal.show();
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            fetch(deleteUrl, {
                method: 'GET'
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmModal'));
                        modal.hide();
                        alert('Product successfully deleted!');
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

        // Create discount form toggle functionality
        const createDiscountBtn = document.getElementById('createDiscountBtn');
        const createDiscountForm = document.getElementById('createDiscountForm');
        const categorySelect = document.getElementById('categorySelect');

        createDiscountBtn.addEventListener('click', function () {
            createDiscountForm.style.display = createDiscountForm.style.display === 'block' ? 'none' : 'block';
            // Reset select to default when opening
            categorySelect.value = '';
        });

        // Redirect on select change
        categorySelect.addEventListener('change', function () {
            const selectedValue = this.value;
            if (selectedValue) {
                // Hide the form after selection
                createDiscountForm.style.display = 'none';
                // Redirect to the corresponding page
                window.location.href = `/${selectedValue}`;
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .create-discount-container {
        position: relative;
    }
    .discount-form-aside {
        margin-top: 10px;
        padding: 15px;
        background-color: #f8f9fa;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        max-width: 300px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .discount-form-aside .form-group {
        margin-bottom: 15px;
    }
    .discount-form-aside .form-group label {
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
    }
    .discount-form-aside .form-control {
        width: 100%;
        padding: 8px;
        font-size: 14px;
    }
    .tab-buttons {
        display: flex;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e0e0e0;
    }
    .tab-btn {
        padding: 10px 25px;
        text-decoration: none;
        color: #333;
        background-color: #f5f5f5;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .tab-btn:first-child {
        border-right: 1px solid #e0e0e0;
    }
    .tab-btn.active {
        background-color: #fff;
        color: #333;
    }
    .tab-btn:hover {
        background-color: #f0f0f0;
    }
    @media (max-width: 768px) {
        .items-per-page {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .tab-buttons {
            width: 100%;
            justify-content: space-between;
        }
        .tab-btn {
            flex: 1;
            text-align: center;
        }
        .items-per-page label,
        .items-per-page select {
            width: 100%;
        }
        .discount-form-aside {
            max-width: 100%;
        }
    }
</style>