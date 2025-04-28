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
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $shownOrders = []; // Track shown orders
                            foreach ($orders as $index => $order): 
                                $uniqueKey = $order['admin_id'] . $order['created_at']; // Unique key for each order
                                if (!in_array($uniqueKey, $shownOrders)): 
                                    $shownOrders[] = $uniqueKey; // Mark this order as shown
                            ?>
                                <tr>
                                <td><?php echo $index + 1; ?></td>
                                        <td><?php echo htmlspecialchars($order['admin_name']); ?></td>
                                        <td><?php echo htmlspecialchars($order['phone_number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                                        <td><?php echo number_format($order['total'], 2); ?></td>
                                        
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
/* Custom styles for status buttons */
.status-buttons {
    display: flex;
    gap: 6px; /* Space between buttons */
    flex-wrap: wrap; /* Allow buttons to wrap on small screens */
    align-items: center;
}

.btn-sm {
    padding: 4px 8px; /* Smaller padding for compact size */
    font-size: 12px; /* Smaller font size */
    border-radius: 4px; /* Rounded corners */
    transition: background-color 0.2s, transform 0.1s; /* Smooth hover effects */
    border: none; /* Remove default border */
    cursor: pointer;
    text-transform: uppercase; /* Modern touch */
    font-weight: 500; /* Slightly bold text */
    color: white; /* White text for contrast */
}

.btn-sm:hover {
    transform: translateY(-1px); /* Slight lift on hover */
    opacity: 0.9; /* Subtle fade */
}

.btn-cancel {
    background-color: #e57373; /* Muted red for cancel */
}

.btn-cancel:hover {
    background-color: #d32f2f; /* Slightly darker red on hover */
}

.btn-confirm {
    background-color: #81c784; /* Soft green for confirm */
}

.btn-confirm:hover {
    background-color: #388e3c; /* Slightly darker green on hover */
}

.btn-view {
    background-color: #64b5f6; /* Calm blue for view */
}

.btn-view:hover {
    background-color: #1976d2; /* Slightly darker blue on hover */
}

/* Ensure buttons are readable on small screens */
@media (max-width: 576px) {
    .btn-sm {
        padding: 3px 6px;
        font-size: 11px;
    }
}
</style>