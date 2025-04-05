<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #f3f4f6 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Stock Management System Styles */
        .stock-management-system {
            max-width: 1400px;
            margin: 10px auto;
            padding: 25px;
            flex: 1;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .management-header {
            padding: 25px 30px; /* Increased padding for better balance */
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px; /* Increased margin for spacing */
            color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .management-header h1 {
            font-size: 1.75em; /* Increased font size for balance */
            font-weight: 600;
            margin: 0;
        }

        .management-controls {
            display: flex;
            gap: 25px; /* Increased gap for better spacing */
            align-items: center;
        }

        .search-wrapper {
            position: relative;
        }

        .search-input {
            padding: 14px 45px 14px 18px; /* Increased padding for larger input */
            border: none;
            border-radius: 50px;
            width: 300px; /* Slightly increased width */
            background: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
            font-size: 1em; /* Increased font size */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .search-input:focus {
            background: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .search-icon {
            position: absolute;
            right: 18px; /* Adjusted position */
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            font-size: 1.1em; /* Increased icon size */
        }

        .filter-select {
            padding: 14px 18px; /* Increased padding */
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.95);
            cursor: pointer;
            font-size: 1em; /* Increased font size */
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .filter-select:focus {
            background: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        /* Stock Overview Styles */
        .stock-overview {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px; /* Increased padding */
            margin-bottom: 30px; /* Increased margin for spacing */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .stock-overview h2 {
            color: #1f2937;
            font-size: 1.8em; /* Increased font size */
            font-weight: 600;
            margin: 0 0 25px; /* Increased margin */
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            gap: 25px; /* Increased gap for larger cards */
            margin-bottom: 25px;
        }

        .stat-card {
            flex: 1;
            background: linear-gradient(145deg, #ffffff 0%, #f9fafb 100%);
            border-radius: 15px;
            padding: 20px; /* Increased padding for larger cards */
            display: flex;
            align-items: center;
            gap: 20px; /* Increased gap between icon and text */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e5e7eb;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: #4f46e5;
            transition: background 0.3s ease;
        }

        .stat-card.warning::before {
            background: #f59e0b;
        }

        .stat-card.danger::before {
            background: #ef4444;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 1.3em; /* Increased icon size */
            color: #4f46e5;
            background: rgba(79, 70, 229, 0.1);
            padding: 15px; /* Increased padding for larger icon */
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1);
        }

        .stat-info {
            text-align: left;
        }

        .stat-value {
            font-size: 1.5em; /* Increased font size for larger display */
            font-weight: 700;
            color: #1f2937;
            display: block;
            transition: color 0.3s ease;
        }

        .stat-card:hover .stat-value {
            color: #4f46e5;
        }

        .stat-label {
            color: #6b7280;
            font-size: 1.1em; /* Increased font size */
            font-weight: 500;
        }

        /* Table Styles */
        .product-table-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow-x: auto;
        }

        .product-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .product-table th, .product-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: middle;
        }

        .product-table th {
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .product-table th.sortable {
            cursor: pointer;
            transition: background 0.3s ease;
        }


        .product-table tr:nth-child(even) {
            background: #f9fafb;
        }

        .product-table tr:hover {
            background: #f1f5f9;
            transition: background 0.2s ease;
        }

        .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        .status-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
        }

        .out-of-stock .status-badge {
            background: #ef4444;
            color: #fff;
        }

        .low-stock .status-badge {
            background: #f59e0b;
            color: #1f2937;
        }

        .stock-control {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .quantity {
            font-weight: 500;
            color: #1f2937;
            font-size: 0.95em;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.8em;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .btn-restock { background: #10b981; color: white; }
        .btn-order { background: #f59e0b; color: #1f2937; }
        .btn-icon { padding: 6px; background: none; color: #6b7280; font-size: 1em; }
        .btn-icon:hover { color: #4f46e5; box-shadow: none; transform: translateY(-1px); }
        .btn-bulk-restock { background: #10b981; color: white; }
        .btn-report { background: #7c3aed; color: white; }

        .secondary-actions {
            display: flex;
            gap: 8px;
            margin-top: 8px;
            justify-content: center;
        }

        .table-footer {
            padding: 15px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9em;
            color: #6b7280;
        }

        .pagination-placeholder {
            color: #9ca3af;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .stock-management-system {
                margin: 20px;
                padding: 20px;
            }

            .management-header {
                flex-direction: column;
                gap: 15px;
                padding: 20px; /* Adjusted for smaller screens */
            }

            .management-header h1 {
                font-size: 1.4em; /* Adjusted for smaller screens */
            }

            .management-controls {
                flex-direction: column;
                width: 100%;
                gap: 15px; /* Adjusted gap */
            }

            .search-input {
                width: 100%;
                padding: 12px 40px 12px 15px; /* Adjusted padding */
                font-size: 0.95em; /* Adjusted font size */
            }

            .search-icon {
                font-size: 1em; /* Adjusted icon size */
            }

            .filter-select {
                width: 100%;
                padding: 12px 15px; /* Adjusted padding */
                font-size: 0.95em; /* Adjusted font size */
            }

            .stock-overview {
                padding: 20px; /* Adjusted padding */
            }

            .stock-overview h2 {
                font-size: 1.5em; /* Adjusted font size */
            }

            .stats-container {
                flex-direction: column;
                gap: 15px;
            }

            .stat-card {
                padding: 20px; /* Adjusted padding for smaller screens */
            }

            .stat-icon {
                font-size: 2em; /* Adjusted icon size */
                padding: 10px; /* Adjusted padding */
            }

            .stat-value {
                font-size: 2em; /* Adjusted font size */
            }

            .stat-label {
                font-size: 0.95em; /* Adjusted font size */
            }

            .product-table th, .product-table td {
                font-size: 0.9em;
                padding: 10px;
            }

            .product-image {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="stock-management-system">
        <div class="management-header">
            <h1>Stock Management Dashboard</h1>
            <div class="management-controls">
                <div class="search-wrapper">
                    <input type="search" placeholder="Search products..." class="search-input">
                    <span class="search-icon"><i class="fas fa-search"></i></span>
                </div>
                <select class="filter-select">
                    <option value="all">All Status</option>
                    <option value="low">Low Stock</option>
                    <option value="out">Out of Stock</option>
                </select>
            </div>
        </div>

        <div class="stock-overview">
            <h2>Stock Overview</h2>
            <div class="stats-container">
                <div class="stat-card">
                    <i class="fas fa-boxes stat-icon"></i>
                    <div class="stat-info">
                        <span class="stat-value" id="total-products">0</span>
                        <span class="stat-label">Total Products</span>
                    </div>
                </div>
                <div class="stat-card warning">
                    <i class="fas fa-exclamation-triangle stat-icon"></i>
                    <div class="stat-info">
                        <span class="stat-value" id="low-stock">0</span>
                        <span class="stat-label">Low Stock</span>
                    </div>
                </div>
                <div class="stat-card danger">
                    <i class="fas fa-ban stat-icon"></i>
                    <div class="stat-info">
                        <span class="stat-value" id="out-stock">0</span>
                        <span class="stat-label">Out of Stock</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-table-container">
            <table class="product-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th class="sortable" data-sort="image">Image</th>
                        <th class="sortable" data-sort="name">Product Name</th>
                        <th class="sortable" data-sort="price">Price</th>
                        <th class="sortable" data-sort="category">Category</th>
                        <th class="sortable" data-sort="stock">Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product) : ?>
                        <?php
                        if ($product['quantity'] >= 10) continue;
                        $statusClass = $product['quantity'] == 0 ? 'out-of-stock' : 'low-stock';
                        $statusText = $product['quantity'] == 0 ? 'Out of Stock' : 'Low Stock';
                        $actionText = $product['quantity'] == 0 ? 'Restock Now' : 'Order More W';
                        $actionClass = $product['quantity'] == 0 ? 'btn-restock' : 'btn-order';
                        ?>
                        <tr class="product-row <?= $statusClass ?>" 
                            data-product-id="<?= $product['product_id'] ?>" 
                            data-quantity="<?= $product['quantity'] ?>"
                            data-price="<?= $product['price'] ?>"
                            data-category="<?= htmlspecialchars($product['categoryId']) ?>">
                            <td><input type="checkbox" class="select-item"></td>
                            <td>
                                <img src="../../../<?= htmlspecialchars($product['image']) ?>" 
                                     alt="<?= htmlspecialchars($product['product_name']) ?>" 
                                     class="product-image" 
                                     loading="lazy">
                            </td>
                            <td><?= htmlspecialchars($product['product_name']) ?></td>
                            <td>$<?= number_format($product['price'], 2) ?></td>
                            <td><?= htmlspecialchars($product['categoryId']) ?></td>
                            <td>
                                <div class="stock-control">
                                    <span class="quantity"><span class="qty-value"><?= $product['quantity'] ?></span></span>
                                </div>
                            </td>
                            <td><span class="status-badge"><?= $statusText ?></span></td>
                            <td>
                                <button class="btn <?= $actionClass ?>" 
                                        data-id="<?= $product['product_id'] ?>" 
                                        title="<?= $actionText ?>">
                                    <?= $actionText ?>
                                </button>
                                <div class="secondary-actions">
                                    <a href="products/edit?id=<?= $product['product_id'] ?>" 
                                       class="btn btn-icon btn-edit" 
                                       title="Edit product"><i class="fas fa-edit"></i></a>
                                    <a href="products/view?id=<?= $product['product_id'] ?>" 
                                       class="btn btn-icon btn-view" 
                                       title="View product details"><i class="fas fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="table-footer">
                <span>Showing <span id="row-count">0</span> items</span>
                <div class="pagination-placeholder">Pagination controls here</div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        class StockManager {
            constructor() {
                this.sortDirection = {};
                this.initEventListeners();
                this.updateStats();
                this.updateRowCount();
            }

            initEventListeners() {
                document.querySelector('.filter-select').addEventListener('change', (e) => {
                    this.filterRows(e.target.value);
                });

                document.querySelector('.search-input').addEventListener('input', (e) => {
                    this.searchRows(e.target.value);
                });

                document.querySelectorAll('.sortable').forEach(header => {
                    header.addEventListener('click', () => this.sortTable(header.dataset.sort));
                });

                document.getElementById('select-all').addEventListener('change', (e) => {
                    document.querySelectorAll('.select-item').forEach(checkbox => {
                        checkbox.checked = e.target.checked;
                    });
                });
            }

            updateRowStatus(row) {
                const qty = parseInt(row.dataset.quantity);
                row.classList.remove('out-of-stock', 'low-stock');
                const actionBtn = row.querySelector('.btn');
                const statusBadge = row.querySelector('.status-badge');

                if (qty === 0) {
                    row.classList.add('out-of-stock');
                    actionBtn.classList.remove('btn-order');
                    actionBtn.classList.add('btn-restock');
                    actionBtn.textContent = 'Restock Now';
                    statusBadge.textContent = 'Out of Stock';
                } else if (qty < 10) {
                    row.classList.add('low-stock');
                    actionBtn.classList.remove('btn-restock');
                    actionBtn.classList.add('btn-order');
                    actionBtn.textContent = 'Order More';
                    statusBadge.textContent = 'Low Stock';
                }
            }

            updateStats() {
                const rows = document.querySelectorAll('.product-row:not([style*="display: none"])');
                const stats = { total: rows.length, low: 0, out: 0 };

                rows.forEach(row => {
                    const qty = parseInt(row.dataset.quantity);
                    if (qty === 0) stats.out++;
                    else if (qty < 10) stats.low++;
                });

                document.getElementById('total-products').textContent = stats.total;
                document.getElementById('low-stock').textContent = stats.low;
                document.getElementById('out-stock').textContent = stats.out;
            }

            updateRowCount() {
                const visibleRows = document.querySelectorAll('.product-row:not([style*="display: none"])').length;
                document.getElementById('row-count').textContent = visibleRows;
            }

            filterRows(status) {
                document.querySelectorAll('.product-row').forEach(row => {
                    row.style.display = 'table-row';
                    if (status === 'low' && !row.classList.contains('low-stock')) {
                        row.style.display = 'none';
                    } else if (status === 'out' && !row.classList.contains('out-of-stock')) {
                        row.style.display = 'none';
                    }
                });
                this.updateStats();
                this.updateRowCount();
            }

            searchRows(query) {
                const searchTerm = query.toLowerCase();
                document.querySelectorAll('.product-row').forEach(row => {
                    const name = row.cells[2].textContent.toLowerCase();
                    row.style.display = name.includes(searchTerm) ? 'table-row' : 'none';
                });
                this.updateStats();
                this.updateRowCount();
            }

            sortTable(column) {
                const tbody = document.querySelector('.product-table tbody');
                const rows = Array.from(tbody.querySelectorAll('.product-row'));
                const direction = this.sortDirection[column] = !this.sortDirection[column] ? 1 : -1;

                rows.sort((a, b) => {
                    let aValue, bValue;
                    switch (column) {
                        case 'name': aValue = a.cells[2].textContent; bValue = b.cells[2].textContent; break;
                        case 'price': aValue = parseFloat(a.dataset.price); bValue = parseFloat(b.dataset.price); break;
                        case 'category': aValue = a.dataset.category; bValue = b.dataset.category; break;
                        case 'stock': aValue = parseInt(a.dataset.quantity); bValue = parseInt(b.dataset.quantity); break;
                        default: return 0;
                    }
                    return (aValue > bValue ? 1 : -1) * direction;
                });

                rows.forEach(row => tbody.appendChild(row));
            }
        }

        document.addEventListener('DOMContentLoaded', () => new StockManager());
    </script>
</body>
</html>