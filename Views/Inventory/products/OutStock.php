<div class="stock-management-system">
    <div class="management-header">
        <h1>Stock Management Dashboard</h1>
        <div class="management-controls">
            <div class="search-wrapper">
                <input type="search" placeholder="Search products..." class="search-input">
                <span class="search-icon">🔍</span>
            </div>
            <select class="filter-select">
                <option value="all">All Status</option>
                <option value="low">Low Stock</option>
                <option value="out">Out of Stock</option>
            </select>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="management-card">
            <h2>Stock Overview</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-value" id="total-products">0</span>
                    <span class="stat-label">Total Products</span>
                </div>
                <div class="stat-item warning">
                    <span class="stat-value" id="low-stock">0</span>
                    <span class="stat-label">Low Stock</span>
                </div>
                <div class="stat-item danger">
                    <span class="stat-value" id="out-stock">0</span>
                    <span class="stat-label">Out of Stock</span>
                </div>
            </div>
            <div class="quick-actions">
                <button class="btn btn-bulk-restock">Bulk Restock</button>
                <button class="btn btn-report">Generate Report</button>
            </div>
        </div>

        <div class="product-grid">
            <?php foreach ($products as $index => $product) : ?>
                <?php
                if ($product['quantity'] >= 10) continue;
                $statusClass = $product['quantity'] == 0 ? 'out-of-stock' : 'low-stock';
                $statusText = $product['quantity'] == 0 ? 'Out of Stock' : 'Low Stock';
                $actionText = $product['quantity'] == 0 ? 'Restock Now' : 'Order More';
                $actionClass = $product['quantity'] == 0 ? 'btn-restock' : 'btn-order';
                ?>
                <div class="product-card <?= $statusClass ?>" 
                     data-product-id="<?= $product['product_id'] ?>" 
                     data-quantity="<?= $product['quantity'] ?>">
                    <div class="card-header">
                        <span class="status-badge"><?= $statusText ?></span>
                    </div>
                    <div class="card-content">
                        <div class="product-image">
                            <img src="../../../<?= htmlspecialchars($product["image"]) ?>" 
                                 alt="<?= htmlspecialchars($product['product_name']) ?>" 
                                 loading="lazy">
                        </div>
                        <div class="product-details">
                            <h3 class="product-name"><?= htmlspecialchars($product['product_name']) ?></h3>
                            <div class="product-meta">
                                <span class="price">$<?= number_format($product["price"], 2) ?></span>
                                <span>Cat: <?= htmlspecialchars($product["categoryId"]) ?></span>
                                <span>Brand: <?= htmlspecialchars($product["brandID"]) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stock-control">
                            <span class="quantity">Stock: <span class="qty-value"><?= $product["quantity"] ?></span></span>
                            <div class="qty-buttons">
                                <button class="qty-btn decrease"></button>
                                <button class="qty-btn increase"></button>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="btn <?= $actionClass ?>" 
                                    data-id="<?= $product['product_id'] ?>">
                                <?= $actionText ?>
                            </button>
                            <div class="secondary-actions">
                                <!-- <button class="btn btn-edit" href="products/view?id="<?= $product['product_id'] ?>">Edit</button> -->
                                <a href="products/edit?id=<?= $product['product_id'] ?>" class="btn btn-view">Edit</a>
                                <a href="products/view?id=<?= $product['product_id'] ?>" class="btn btn-view">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<script>
class StockManager {
    constructor() {
        this.initEventListeners();
        this.updateStats();
    }

    initEventListeners() {
        // Quantity controls
        document.querySelectorAll('.product-card').forEach(card => {
            const decrease = card.querySelector('.decrease');
            const increase = card.querySelector('.increase');
            const qtyValue = card.querySelector('.qty-value');

            decrease.addEventListener('click', () => this.adjustQuantity(card, -1, qtyValue));
            increase.addEventListener('click', () => this.adjustQuantity(card, 1, qtyValue));
        });

        // Filter
        document.querySelector('.filter-select').addEventListener('change', (e) => {
            this.filterCards(e.target.value);
        });

        // Search
        document.querySelector('.search-input').addEventListener('input', (e) => {
            this.searchCards(e.target.value);
        });
    }

    adjustQuantity(card, change, qtyElement) {
        let qty = parseInt(qtyElement.textContent) + change;
        if (qty < 0) return;

        qtyElement.textContent = qty;
        card.dataset.quantity = qty;
        this.updateCardStatus(card);
        this.updateStats();
        
        // Add your AJAX call here to update server
    }

    updateCardStatus(card) {
        const qty = parseInt(card.dataset.quantity);
        card.classList.remove('out-of-stock', 'low-stock');
        const actionBtn = card.querySelector('.btn');

        if (qty === 0) {
            card.classList.add('out-of-stock');
            actionBtn.classList.remove('btn-order');
            actionBtn.classList.add('btn-restock');
            actionBtn.textContent = 'Restock';
            card.querySelector('.card-status').dataset.status = 'Out of Stock';
        } else if (qty < 10) {
            card.classList.add('low-stock');
            actionBtn.classList.remove('btn-restock');
            actionBtn.classList.add('btn-order');
            actionBtn.textContent = 'Order';
            card.querySelector('.card-status').dataset.status = 'Low Stock';
        }
    }

    updateStats() {
        const cards = document.querySelectorAll('.product-card');
        const stats = {
            total: cards.length,
            low: 0,
            out: 0
        };

        cards.forEach(card => {
            const qty = parseInt(card.dataset.quantity);
            if (qty === 0) stats.out++;
            else if (qty < 10) stats.low++;
        });

        document.getElementById('total-products').textContent = stats.total;
        document.getElementById('low-stock').textContent = stats.low;
        document.getElementById('out-stock').textContent = stats.out;
    }

    filterCards(status) {
        document.querySelectorAll('.product-card').forEach(card => {
            card.style.display = 'block';
            if (status === 'low' && !card.classList.contains('low-stock')) {
                card.style.display = 'none';
            } else if (status === 'out' && !card.classList.contains('out-of-stock')) {
                card.style.display = 'none';
            }
        });
    }

    searchCards(query) {
        const searchTerm = query.toLowerCase();
        document.querySelectorAll('.product-card').forEach(card => {
            const name = card.querySelector('.product-name').textContent.toLowerCase();
            card.style.display = name.includes(searchTerm) ? 'block' : 'none';
        });
    }
}

document.addEventListener('DOMContentLoaded', () => new StockManager());
</script>
<style>
.stock-management-system {
    max-width: 1500px;
    margin: 20px auto;
    padding: 25px;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f0f2f5;
    border-radius: 12px;
}

.management-header {
    background: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.management-header h1 {
    color: #1a1a2e;
    font-size: 1.8em;
    margin: 0;
}

.management-controls {
    display: flex;
    gap: 15px;
    align-items: center;
}

.search-wrapper {
    position: relative;
}

.search-input {
    padding: 10px 35px 10px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 25px;
    width: 250px;
    background: #fff;
    transition: all 0.3s ease;
}

.search-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
    outline: none;
}

.search-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
}

.filter-select {
    padding: 10px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    background: #fff;
    cursor: pointer;
}

.dashboard-grid {
    display: grid;
    grid-template-columns: 1fr 3fr;
    gap: 30px;
}

.management-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 25px;
    height: 400px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.management-card h2 {
    color: #1a1a2e;
    margin: 0 0 20px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 25px 0;
}

.stat-item {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.2s ease;
}

.stat-item:hover {
    transform: translateY(-3px);
}

.stat-item.warning { border-left: 4px solid #ffc107; }
.stat-item.danger { border-left: 4px solid #dc3545; }

.stat-value {
    font-size: 2em;
    font-weight: 600;
    color: #1a1a2e;
    display: block;
}

.stat-label {
    color: #666;
    font-size: 0.95em;
}

.quick-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.product-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card-header {
    padding: 15px 20px;
    /* background: #f8f9fa; */
}

.status-badge {
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.85em;
    font-weight: 500;
}

.out-of-stock .status-badge {
    background: #dc3545;
    color: white;
}

.low-stock .status-badge {
    background: #ffc107;
    color: #333;
}

.card-content {
    padding: 20px;
    display: flex;
    gap: 20px;
    align-items: center;
}

.product-image img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid #eee;
}

.product-details {
    flex: 1;
}

.product-name {
    margin: 0 0 12px;
    font-size: 1.2em;
    color: #1a1a2e;
    font-weight: 500;
}

.product-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    color: #666;
    font-size: 0.9em;
}

.product-meta .price {
    font-weight: 600;
    color: #2c3e50;
}

.card-footer {
    padding: 20px;
    background: #fafbfc;
    border-top: 1px solid #eee;
}

.stock-control {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #f1f3f5;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.quantity {
    font-weight: 500;
    color: #2c3e50;
} 

.qty-buttons {
    display: flex;
    gap: 8px;
}

.qty-btn {
    width: 28px;
    height: 28px;
    border: none;
    background: #007bff;
    color: white;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.1em;
    transition: background 0.2s ease;
    display: none;
} 

.qty-btn:hover {
    background: #0056b3;
}

.card-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.secondary-actions {
    display: flex;
    gap: 10px;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.btn-add { background: #17a2b8; color: white; }
.btn-restock { background: #28a745; color: white; }
.btn-order { background: #ffc107; color: #333; }
.btn-edit { background: #6c757d; color: white; padding: 8px 15px; }
.btn-view { background: #007bff; color: white; padding: 8px 15px; }
.btn-bulk-restock { background: #17a2b8; color: white; }
.btn-report { background: #6610f2; color: white; }
</style>