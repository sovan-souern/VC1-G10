<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Order list</h4>
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
                            <form class="form-inline">
                                <input id="brandSearch" class="form-control mr-sm-2" type="search" placeholder="Search Brand Name" aria-label="Search">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $shownOrders = []; // Track shown orders
                            foreach ($orders as $index => $order): 
                                $uniqueKey = $order['admin_id'] . '_' . $order['created_at']; // Unique key for each order
                                if (!in_array($uniqueKey, $shownOrders)): 
                                    $shownOrders[] = $uniqueKey; // Mark this order as shown
                            ?>
                                <tr>
                                <td><?php echo $index + 1; ?></td>
                                        <td><?php echo htmlspecialchars($order['admin_name']); ?></td>
                                        <td><?php echo htmlspecialchars($order['phone_number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                                        <td><?php echo number_format($order['total'], 2); ?></td>
                                        <td class="action-buttons">
                                            <div class="dropdown">
                                                <button class="btn btn-more" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <!-- Use text-based ellipsis as fallback; replace with your icon -->
                                                    <span>⋮</span>
                                                    <!-- If you have the icon, uncomment below -->
                                                    <!-- <img src="/Views/assets/img1/icons/more-vertical.svg" alt="More" style="width: 20px;"> -->
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a class="dropdown-item confirm-action" href="order/confirm?id=<?= $order['id'] ?>">Confirm</a></li>
                                                    <li><a class="dropdown-item cancel-action"  href="order/cancel?id=<?= $order['id'] ?>">Cancel</a></li>
                                                    <li><a class="dropdown-item view-action"  href="order/view?id=<?= $order['id'] ?>">View</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php 
                                    endif; 
                                endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles for action buttons */
.action-buttons {
    position: relative;
    display: flex;
    align-items: center;
}

.btn-more {
    background: none;
    border: none;
    padding: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-more:hover {
    background-color: #f0f0f0;
    border-radius: 4px;
}

/* Dropdown menu styles */
.dropdown-menu {
    min-width: 120px;
    padding: 5px 0;
    border-radius: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    border: none;
}

.dropdown-item {
    font-size: 13px;
    padding: 8px 15px;
    color: #333;
    transition: background-color 0.2s;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
}

/* Color-coded actions for better UX */
.confirm-action {
    color: #388e3c; /* Green for confirm */
}

.cancel-action {
    color: #d32f2f; /* Red for cancel */
}

.view-action {
    color: #1976d2; /* Blue for view */
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .dropdown-menu {
        min-width: 100px;
        font-size: 12px;
    }
    .dropdown-item {
        padding: 6px 12px;
    }
}
</style>

<script>
// Ensure dropdowns work with Bootstrap's JavaScript (if using Bootstrap)
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Bootstrap dropdowns if not already handled
    if (typeof bootstrap !== 'undefined') {
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        dropdownElementList.forEach(function (dropdownToggleEl) {
            new bootstrap.Dropdown(dropdownToggleEl);
        });
    }
});
</script>