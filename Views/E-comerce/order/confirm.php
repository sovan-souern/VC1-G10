<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Order Confirm</h4>
            </div>
        </div>
        <div class="card">
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
                            <form class="form-inline position-relative">
                                <input id="brandSearch" class="form-control mr-sm-2" type="search" placeholder="Search by User Name or Phone" aria-label="Search">
                                <button type="button" id="clearSearch" class="btn btn-clear d-none" aria-label="Clear search">
                                    <img src="/Views/assets/img1/icons/closes.svg" alt="clear">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Phone</th>
                                <th>Buy at</th>
                                <th>Total Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="orderTableBody">
                            <?php
                            $shownOrders = []; // Track shown orders
                            $displayIndex = 1; // Initialize display index
                            foreach ($orders as $order):
                                $uniqueKey = $order['admin_id'] . $order['created_at']; // Unique key for each order
                                if (!in_array($uniqueKey, $shownOrders)):
                                    $shownOrders[] = $uniqueKey; // Mark this order as shown
                                    if ($order["status"] === "Comfirm"): // Correct condition to check status
                            ?>
                                        <tr>
                                            <td><?php echo $displayIndex++; ?></td> <!-- Increment display index -->
                                            <td><?php echo htmlspecialchars($order['admin_name']); ?></td>
                                            <td><?php echo htmlspecialchars($order['phone_number']); ?></td>
                                            <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                                            <td>$ <?php echo number_format($order['total'], 2); ?></td>
                                            <td class="action-buttons">
                                                <div class="dropdown dropstart">
                                                    <button class="btn btn-more" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3 4.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm5 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm5 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0z" />
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item unconfirm-action" href="/order/uncomfirm/store?id=<?= $order['id'] ?>"><i class="fas fa-times"></i> Uncomfirm</a></li>
                                                        <li><a class="dropdown-item view-action" href="/order_detail?id=<?= $order['id'] ?>"><i class="fas fa-eye"></i> View</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                            <?php
                                    endif;
                                endif;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                    <div id="noResults" class="text-center mt-3 d-none">
                        <p>No orders found matching your search.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Existing styles */
    .status-buttons {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        align-items: center;
    }

    .btn-sm {
        padding: 4px 8px;
        font-size: 12px;
        border-radius: 4px;
        transition: background-color 0.2s, transform 0.1s;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 500;
        color: white;
    }

    .btn-sm:hover {
        transform: translateY(-1px);
        opacity: 0.9;
    }

    .btn-cancel {
        background-color: #e57373;
    }

    .btn-cancel:hover {
        background-color: #d32f2f;
    }

    .btn-confirm {
        background-color: #81c784;
    }

    .btn-confirm:hover {
        background-color: #388e3c;
    }

    .btn-view {
        background-color: #64b5f6;
    }

    .btn-view:hover {
        background-color: #1976d2;
    }

    @media (max-width: 576px) {
        .btn-sm {
            padding: 3px 6px;
            font-size: 11px;
        }
    }

    /* New styles for search */
    .search-input {
        position: relative;
    }

    .btn-clear {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .btn-clear img {
        width: 16px;
        height: 16px;
    }

    .table tr.match {
        background-color: #f0f8ff; /* Light blue highlight for matched rows */
    }

    #noResults {
        color: #666;
        font-size: 14px;
    }
</style>

<script>
    // Search functionality
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('brandSearch');
        const clearButton = document.getElementById('clearSearch');
        const tableBody = document.getElementById('orderTableBody');
        const noResults = document.getElementById('noResults');
        const rows = tableBody.getElementsByTagName('tr');

        // Function to filter table rows
        function filterTable() {
            const query = searchInput.value.trim().toLowerCase();
            let hasMatches = false;

            // Loop through each row
            for (let row of rows) {
                const userName = row.cells[1].textContent.toLowerCase(); // User Name
                const phone = row.cells[2].textContent.toLowerCase(); // Phone

                // Check if query matches User Name or Phone
                if (userName.includes(query) || phone.includes(query)) {
                    row.style.display = '';
                    row.classList.add('match'); // Highlight matched row
                    hasMatches = true;
                } else {
                    row.style.display = 'none';
                    row.classList.remove('match');
                }
            }

            // Show/hide no results message
            noResults.classList.toggle('d-none', hasMatches);
        }

        // Show/hide clear button based on input
        function toggleClearButton() {
            clearButton.classList.toggle('d-none', !searchInput.value.trim());
        }

        // Event listener for search input
        searchInput.addEventListener('input', () => {
            filterTable();
            toggleClearButton();
        });

        // Event listener for clear button
        clearButton.addEventListener('click', () => {
            searchInput.value = '';
            filterTable();
            toggleClearButton();
        });

        // Initial check for clear button visibility
        toggleClearButton();
    });
</script>