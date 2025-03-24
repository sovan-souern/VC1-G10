<?php require_once "Views/assets/css/prodcut_style.php" ?>

<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="products/create" class="btn btn-added"><img src="/Views/assets/img1/icons/plus.svg" alt="img"
                        class="me-1">Add New Product</a>
            </div>
        </div>
        <div class="card bg-none w-100">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="/Views/assets/img1/icons/filter.svg" alt="img">
                                <span><img src="/Views/assets/img1/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <form class="form-inline">
                                <input id="brandSearch" class="form-control mr-sm-2" type="search" placeholder="Search Brand Name" aria-label="Search">
                            </form>
                        </div>
                    </div>
                    <div class="items-per-page-dropdown">
                        <label for="itemsPerPage">Show:</label>
                        <select id="itemsPerPage" class="form-select">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                </div>

                <div class="card mb-3" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="category-filter">
                                        <option value=""> Choose Category </option>
                                        <option value="Sun screen">Sun screen</option>
                                        <option value="Night screen">Night screen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="brand-filter">
                                        <option value="">▼ Choose Brand</option>
                                        <option value="Addedas">Addedas</option>
                                        <option value="zoon">Zoon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="price-filter">
                                        <option value="">Choose Price</option>
                                        <option value="1500.00">1500.00</option>
                                        <option value="1000.00">1000.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="/Views/assets/img1/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew product-table">
                        <thead>
                            <tr>
                                <th class="id-column">ID</th>
                                <th class="product-column">Product Name</th>
                                <th class="category-column">
                                    <select class="form-select border-0 bg-transparent category-select"
                                        id="category-filter-header">
                                        <option value="">Category</option>
                                        <?php foreach ($categories as $key => $category) : ?>
                                            <option value="<?= htmlspecialchars($category["category_name"]) ?>"><?= htmlspecialchars($category["category_name"]) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </th>
                                <th class="brand-column">
                                    <select class="form-select border-0 bg-transparent brand-select"
                                        id="brand-filter-header">
                                        <option value="">Brand</option>
                                        <?php foreach ($brands as $key => $brand) : ?>
                                            <option value="<?= htmlspecialchars($brand["brand_name"]) ?>"><?= htmlspecialchars($brand["brand_name"]) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </th>
                                <th class="qty-column">Qty</th>
                                <th class="price-column">Price</th>
                                <th class="action-column">Action</th>
                            </tr>
                        </thead>
                        <tbody id="product-list">
                            <?php
                            // Calculate pagination
                            $itemsPerPage = isset($_GET['items_per_page']) ? (int)$_GET['items_per_page'] : 10;
                            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $totalItems = count($products);

                            // If "all" is selected, show all products
                            $showAll = isset($_GET['items_per_page']) && $_GET['items_per_page'] === 'all';

                            // Calculate start and end indices for the current page
                            $start = $showAll ? 0 : ($currentPage - 1) * $itemsPerPage;
                            $end = $showAll ? $totalItems : min($start + $itemsPerPage, $totalItems);

                            // Get products for the current page
                            $displayProducts = $showAll ? $products : array_slice($products, $start, $itemsPerPage);

                            foreach ($displayProducts as $index => $product) :
                                $actualIndex = $start + $index + 1; // For displaying the correct ID
                            ?>
                                <tr class="product" data-category="<?= htmlspecialchars($product["categoryId"]) ?>" data-brand="<?= htmlspecialchars($product["brandID"]) ?>" data-price="<?= htmlspecialchars($product["price"]) ?>">
                                    <td class="id-column"><?= $actualIndex ?></td>
                                    <td class="product-column">
                                        <div class="product-info">
                                            <img class="product-image" src="<?= htmlspecialchars($product["image"]) ?>" alt="product">
                                            <span class="product-name"><?= htmlspecialchars($product["product_name"]) ?></span>
                                        </div>
                                    </td>
                                    <td class="category-column"><?= htmlspecialchars($product["categoryId"]) ?></td>
                                    <td class="brand-column"><?= htmlspecialchars($product["brandID"]) ?></td>
                                    <td class="qty-column"><?= htmlspecialchars($product["quantity"]) ?></td>
                                    <td class="price-column"><?= htmlspecialchars($product["price"]) ?> $</td>
                                    <td class="action-column">
                                        <div class="action-buttons">
                                            <a class="action-btn discount-btn" href="create-discount?id=<?= $product['product_id'] ?>">
                                                <img src="/Views/assets/img/descount.png" alt="discount">
                                            </a>
                                            <a class="action-btn view-btn" href="products/view?id=<?= $product['product_id'] ?>">
                                                <img src="/Views/assets/img1/icons/eye.svg" alt="view">
                                            </a>
                                            <a class="action-btn edit-btn" href="products/edit?id=<?= $product['product_id'] ?>">
                                                <img src="/Views/assets/img1/icons/edit.svg" alt="edit">
                                            </a>
                                            <a class="action-btn delete-btn delete-product" href="products/delete?id=<?= $product['product_id'] ?>">
                                                <img src="/Views/assets/img1/icons/delete.svg" alt="delete">
                                                <?php require "delete.php" ?>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                <div class="pagination-container">
                    <div class="pagination-row">
                        <div class="pagination-info">
                            <?php if (!$showAll): ?>
                                Showing <?= $start + 1 ?> to <?= $end ?> of <?= $totalItems ?> entries
                            <?php else: ?>
                                Showing all <?= $totalItems ?> entries
                            <?php endif; ?>
                        </div>
                        <div class="pagination-controls">
                            <?php if (!$showAll && $totalItems > $itemsPerPage): ?>
                                <div class="pagination">
                                    <?php
                                    $totalPages = ceil($totalItems / $itemsPerPage);

                                    // Previous button
                                    if ($currentPage > 1): ?>
                                        <a class="page-btn prev-btn" href="?page=<?= $currentPage - 1 ?>&items_per_page=<?= $itemsPerPage ?>" aria-label="Previous">
                                            &laquo;
                                        </a>
                                    <?php endif; ?>

                                    <?php
                                    // Page numbers
                                    $startPage = max(1, $currentPage - 2);
                                    $endPage = min($totalPages, $startPage + 4);

                                    for ($i = $startPage; $i <= $endPage; $i++): ?>
                                        <a id="next-page" class="page-btn <?= $i === $currentPage ? 'active' : '' ?>" href="?page=<?= $i ?>&items_per_page=<?= $itemsPerPage ?>">
                                            <?= $i ?>
                                        </a>
                                    <?php endfor; ?>

                                    <!-- Next button -->
                                    <?php if ($currentPage < $totalPages): ?>
                                        <a class="page-btn next-btn" href="?page=<?= $currentPage + 1 ?>&items_per_page=<?= $itemsPerPage ?>" aria-label="Next">
                                            &raquo;
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Items per page functionality
        const itemsPerPageSelect = document.getElementById('itemsPerPage');

        // Set the current selection based on URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const currentItemsPerPage = urlParams.get('items_per_page') || '10';
        itemsPerPageSelect.value = currentItemsPerPage;

        // Handle change in items per page
        itemsPerPageSelect.addEventListener('change', function() {
            const selectedValue = this.value;
            const currentUrl = new URL(window.location.href);

            // Update URL parameters
            currentUrl.searchParams.set('items_per_page', selectedValue);
            currentUrl.searchParams.set('page', '1'); // Reset to first page when changing items per page

            // Navigate to the new URL
            window.location.href = currentUrl.toString();
        });

        // Filter toggle
        const filterButton = document.getElementById('filter_search');
        const filterInputs = document.getElementById('filter_inputs');

        filterButton.addEventListener('click', function() {
            filterInputs.classList.toggle('show-filters');
        });
    });
</script>