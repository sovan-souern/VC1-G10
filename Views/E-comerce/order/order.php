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
                                <!-- <th>Item</th> -->
                                <th>Phone</th>
                                <th>Buy at</th>
                                <!-- <th>Adress</th> -->
                                <th>Total Price</th>
                                <!-- <th>Action</th> -->
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $shownOrders = []; // Track shown orders
                            foreach ($orders as $index => $order): 
                                // var_dump($order);
                                
                                $uniqueKey = $order['admin_id'] . '_' . $order['created_at']; // Unique key for each order
                                if (!in_array($uniqueKey, $shownOrders)): 
                                    $shownOrders[] = $uniqueKey; // Mark this order as shown
                            ?>
                                <tr>
                                    <td><?php echo $index + 1; ?></td>
                                    <td><?php echo $order['admin_name']; ?></td>
                                    <td><?php echo $order['phone_number']; ?></td>
                                    <td><?php echo $order['created_at']; ?></td>
                                    <td><?php echo $order['total']; ?></td>
                                    <td>
                                        <a href="/E-comerce/order/cancel/<?php echo $order['id']; ?>" class="btn btn-danger">Cancel</a>
                                        <a href="/E-comerce/order/confirm/<?php echo $order['id']; ?>" class="btn btn-success">Confirm</a>
                                        <a href="/E-comerce/order/views/<?php echo $order['id']; ?>" class="btn btn-success">Views</a>
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

</body>

</html>
