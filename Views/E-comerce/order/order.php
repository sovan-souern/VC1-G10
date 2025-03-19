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
                            <a class="btn btn-searchset"><img src="/Views/assets/img1/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Item</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Buy at</th>
                                <th>Adress</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $index => $order): ?>
                                <tr>
                                    <!-- <td><?= $index + 1 ?></td>
                                    <td>
                                        <?= htmlspecialchars($order['product_name'], ENT_QUOTES, 'UTF-8') ?>
                                    </td>
                                    <td><?= htmlspecialchars($order['item'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                    <td><?= htmlspecialchars($order['phone_number'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                    <td><?= htmlspecialchars($order['status'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                    <td><?= htmlspecialchars($order['buy_at'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                    <td><?= htmlspecialchars($order['adress'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                    <td><?= htmlspecialchars($order['total_price'], ENT_QUOTES, 'UTF-8') ?></td> -->
                                    <!-- <td>
                                        <a class="me-3" href="/category/edit?id=<?= $order[''] ?>">
                                            <img src="/Views/assets/img1/icons/edit.svg" alt="Edit">
                                        </a>
                                        <a class="delete-product" href="/category/delete?id=<?= $order[''] ?>">
                                            <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                            <?php require "delete.php" ?>
                                        </a>
                                    </td> -->
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
