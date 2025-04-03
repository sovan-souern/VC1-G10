<div class="product-grid">
    <?php foreach ($products as $index => $product) : ?>
        <?php
        // Skip products that are in stock (quantity >= 10)
        if ($product['quantity'] >= 10) {
            continue;
        }

        // Determine stock status and card class
        $cardClass = '';
        $stockStatus = '';
        $actionButton = '';

        if ($product['quantity'] == 0) {
            $cardClass = 'out-of-stock';
            $stockStatus = '<span class="badge badge-danger">Out of Stock</span>';
            $actionButton = '<button class="btn btn-primary restock-btn" data-id="' . $product['product_id'] . '">Restock</button>';
        } elseif ($product['quantity'] < 10) {
            $cardClass = 'low-stock';
            $stockStatus = '<span class="badge badge-warning">Low Stock</span>';
            $actionButton = '<button class="btn btn-warning order-btn" data-id="' . $product['product_id'] . '">Order More</button>';
        }
        ?>
        <div class="product-card <?= $cardClass ?>" data-quantity="<?= $product['quantity'] ?>">
            <div class="card-header">
                <div class="product-image">
                    <img src="../../../<?= htmlspecialchars($product["image"]) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
                </div>
                <div class="product-info">
                    <h3 class="product-name"><?= htmlspecialchars($product['product_name']) ?></h3>
                    <div class="product-meta">
                        <p>Category: <?= htmlspecialchars($product["categoryId"]) ?></p>
                        <p>Brand: <?= htmlspecialchars($product["brandID"]) ?></p>
                    </div>
                </div>
            </div>
            
            <div class="card-content">
                <div class="price-stock">
                    <span class="price"><?= htmlspecialchars($product["price"]) ?></span>
                    <div class="stock-info">
                        <span class="quantity">Quantity: <?= htmlspecialchars($product["quantity"]) ?></span>
                        <?= $stockStatus ?>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="action-buttons">
                    <?= $actionButton ?>
                </div>
                <a class="view-btn" href="products/view?id=<?= $product['product_id'] ?>">
                    <img src="/Views/assets/img1/icons/eye.svg" alt="View" class="icon-view">
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>


<style>
/* Card Layout Styles */
.product-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
    padding: 20px;
}

@media (min-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .product-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.product-card {
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    background-color: #fff;
    border: 1px solid #e0e0e0;
}

.product-card:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.product-card.out-of-stock {
    background-color: #f8d7da;
    border-color: #f5c2c7;
}

.product-card.low-stock {
    background-color: #fff3cd;
    border-color: #ffecb5;
}

/* Card Header Styles */
.card-header {
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.product-image {
    width: 80px;
    height: 80px;
    border-radius: 6px;
    overflow: hidden;
    background-color: #f5f5f5;
    flex-shrink: 0;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info {
    flex: 1;
}

.product-name {
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 5px 0;
    color: #333;
}

.product-meta {
    font-size: 13px;
    color: #666;
}

.product-meta p {
    margin: 2px 0;
}

/* Card Content Styles */
.card-content {
    padding: 0 15px 15px;
}

.price-stock {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.price {
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.stock-info {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.quantity {
    font-size: 13px;
    color: #666;
    margin-bottom: 5px;
}

/* Card Footer Styles */
.card-footer {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

/* Badge Styles */
.badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}

.badge-danger {
    background-color: #dc3545;
    color: white;
}

.badge-warning {
    background-color: #ffc107;
    color: #212529;
}

/* Button Styles */
.btn {
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    transition: background-color 0.2s;
}

.btn-primary {
    background-color: #0d6efd;
    color: white;
}

.btn-primary:hover {
    background-color: #0b5ed7;
}

.btn-warning {
    background-color: #ffc107;
    color: #212529;
}

.btn-warning:hover {
    background-color: #ffca2c;
}

.view-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 4px;
    background-color: #f5f5f5;
    transition: background-color 0.2s;
}

.view-btn:hover {
    background-color: #e0e0e0;
}

.icon-view {
    width: 16px;
    height: 16px;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Log warnings for stock levels
        document.querySelectorAll(".product-card").forEach(card => {
            let quantity = parseInt(card.dataset.quantity, 10);
            if (quantity < 10 && quantity > 0) {
                console.warn("Warning: A product is running low on stock!");
            } else if (quantity === 0) {
                console.error("Alert: A product is out of stock!");
            }
        });

        // Restock button functionality
        document.querySelectorAll(".restock-btn").forEach(button => {
            button.addEventListener("click", function() {
                alert("Restock request sent for product ID: " + this.dataset.id);
            });
        });

        // Order more button functionality
        document.querySelectorAll(".order-btn").forEach(button => {
            button.addEventListener("click", function() {
                alert("Order request sent for more stock of product ID: " + this.dataset.id);
            });
        });
    });
</script>