<?php require "style.php"?>
<?php require __DIR__ . "/../../assets/js/discount.php" ?>

<div class="container-fluid">
    <div class="card-page">
        <h4>Discount History</h4>
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
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Original Price</th>
                        <th>Discount</th>
                        <th>Discounted Price</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($discounts)) : ?>
                        <tr class="no-data">
                            <td colspan="8" class="text-center">No expired discounts found.</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($discounts as $index=>$discount) : ?>
                            <?php if (isset($discount["end_date"]) && $discount["end_date"] < date("Y-m-d")) : ?>
                                <tr>
                                    <td><?php echo $index+1?></td>
                                    <td style="width: 80px;">
                                        <?php if (!empty($discount["image"])) : ?>
                                            <img src="../../../<?php echo htmlspecialchars($discount["image"]); ?>" alt="Product Image" class="product-table-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="product-image-fallback" style="display: none;">No Image</div>
                                        <?php else : ?>
                                            <div class="product-image-fallback">No Image</div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <h5 class="product-title"><?php echo htmlspecialchars($discount["product_name"]); ?></h5>
                                    </td>
                                    <td>
                                        <span class="original-price">$<?php echo number_format($discount["price"], 2); ?></span>
                                    </td>
                                    <td>
                                        <span class="discount_bage"><?php echo($discount["discount_percentage"])?> %</span>
                                    </td>
                                    <td>
                                        <span class="discounted-price">$<?php echo number_format($discount["price"] * (1 - $discount["discount_percentage"] / 100), 2); ?></span>
                                    </td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="action-btn view-btn" href="/discount/view?id=<?php echo $discount["product_id"]; ?>">
                                                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
                                            </a>
                                            <a class="action-btn edit-btn" href="/discount/edit?id=<?php echo $discount["product_id"]; ?>">
                                                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
                                            </a>
                                            <a class="action-btn delete-btn delete-product" href="/discount/delete?id=<?php echo $discount["product_id"]; ?>">
                                                <img src="/Views/assets/img1/icons/delete.svg" alt="delete">
                                                <?php require "delete.php" ?>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="pagination" id="pagination">
            <button id="prevPage" class="btn btn-outline-primary">Previous</button>
            <span id="pageInfo"></span>
            <button id="nextPage" class="btn btn-outline-primary">Next</button>
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
    // Delete functionality
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
                const productRow = document.querySelector(`a[href="${deleteUrl}"]`).closest('tr');
                if (productRow) {
                    productRow.remove();
                    updateTableDisplay();
                }
            } else {
                alert('Error deleting product: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Filter toggle
    document.getElementById('filter_search').addEventListener('click', function() {
        const filterInputs = document.getElementById('filter_inputs');
        filterInputs.style.display = filterInputs.style.display === 'none' || filterInputs.style.display === '' ? 'flex' : 'none';
    });

    // Table display management
    const itemsPerPageSelect = document.getElementById('itemsPerPage');
    const searchInput = document.getElementById('brandSearch');
    const tableBody = document.querySelector('table tbody');
    const allRows = Array.from(tableBody.querySelectorAll('tr:not(.no-data)'));
    let currentPage = 1;
    let filteredRows = [...allRows];

    function updateTableDisplay() {
        const itemsPerPage = parseInt(itemsPerPageSelect.value);
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        // Hide all rows
        allRows.forEach(row => row.style.display = 'none');
        
        // Show filtered rows for current page
        const rowsToShow = itemsPerPage === 1000 ? filteredRows : filteredRows.slice(startIndex, endIndex);
        rowsToShow.forEach(row => row.style.display = '');

        // Update pagination
        const totalPages = itemsPerPage === 1000 ? 1 : Math.ceil(filteredRows.length / itemsPerPage);
        document.getElementById('pageInfo').textContent = `Page ${currentPage} of ${totalPages}`;
        
        document.getElementById('prevPage').disabled = currentPage === 1;
        document.getElementById('nextPage').disabled = currentPage === totalPages || filteredRows.length === 0;

        // Show "No results" message if no matches
        const noDataRow = tableBody.querySelector('.no-data');
        if (filteredRows.length === 0 && noDataRow) {
            noDataRow.style.display = '';
        } else if (noDataRow) {
            noDataRow.style.display = 'none';
        }
    }

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();
        filteredRows = allRows.filter(row => {
            const productName = row.querySelector('.product-title').textContent.toLowerCase();
            return productName.includes(searchTerm);
        });
        currentPage = 1;
        updateTableDisplay();
    });

    // Items per page change
    itemsPerPageSelect.addEventListener('change', function() {
        currentPage = 1;
        updateTableDisplay();
    });

    // Pagination controls
    document.getElementById('prevPage').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            updateTableDisplay();
        }
    });

    document.getElementById('nextPage').addEventListener('click', function() {
        const itemsPerPage = parseInt(itemsPerPageSelect.value);
        const totalPages = itemsPerPage === 1000 ? 1 : Math.ceil(filteredRows.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            updateTableDisplay();
        }
    });

    // Initial display
    updateTableDisplay();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body, html {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .container-fluid {
        width: 100%;
        padding: 0 15px;
        box-sizing: border-box;
    }

    .card-page {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
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

    .table {
        margin-top: 20px;
        width: 100%;
    }

    .product-table-image {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
    }

    .product-image-fallback {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        border-radius: 4px;
        font-size: 10px;
        color: #777;
    }

    .product-title {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
    }

    .discount_bage {
        display: inline-block;
        padding: 4px 8px;
        background-color: #ffebee;
        color: #e53935;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }

    .original-price {
        text-decoration: line-through;
        color: #777;
    }

    .discounted-price {
        font-weight: 600;
        color: #333;
    }

    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 5px;
        transition: all 0.2s ease;
    }

    .view-btn {
        background-color: rgba(33, 150, 243, 0.1);
    }

    .view-btn:hover {
        background-color: rgba(33, 150, 243, 0.2);
    }

    .edit-btn {
        background-color: rgba(76, 175, 80, 0.1);
    }

    .edit-btn:hover {
        background-color: rgba(76, 175, 80, 0.2);
    }

    .delete-btn {
        background-color: rgba(244, 67, 54, 0.1);
    }

    .delete-btn:hover {
        background-color: rgba(244, 67, 54, 0.2);
    }

    .action-btn img {
        width: 16px;
        height: 16px;
    }

    .pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    #filter_inputs {
        display: none;
        gap: 10px;
        margin-bottom: 15px;
    }

    #filter_inputs input {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .serch-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .serch-group {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .items-per-page {
            margin-top: 15px;
        }
    }
</style>