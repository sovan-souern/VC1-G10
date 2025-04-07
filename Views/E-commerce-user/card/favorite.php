<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorites</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Your Favorites</h1>
        <div class="favorites-list" id="favoritesList">
            <?php
            // Sample product database (in real application, this would come from a database)
            $products = [
                1 => "Product 1",
                2 => "Product 2",
                3 => "Product 3"
            ];
            ?>
        </div>
        <a href="index.html" class="fav-link">Back to Products</a>
    </div>
    <script>
        // Get favorites from localStorage
        const favorites = JSON.parse(localStorage.getItem('favorites') || '[]');
        const favoritesList = document.getElementById('favoritesList');
        
        // Sample product data (matching the PHP array)
        const products = {
            1: "Product 1",
            2: "Product 2",
            3: "Product 3"
        };

        // Display favorites
        if (favorites.length === 0) {
            favoritesList.innerHTML = "<p>No favorites yet!</p>";
        } else {
            favorites.forEach(id => {
                if (products[id]) {
                    const div = document.createElement('div');
                    div.className = 'product';
                    div.innerHTML = `<h3>${products[id]}</h3>`;
                    favoritesList.appendChild(div);
                }
            });
        }
    </script>
</body>
</html>

<div class="product-list">
    <div class="product-card">
        <span class="favorite-icon" data-id="1">★</span>
        <img src="https://via.placeholder.com/250x150" alt="Product 1">
        <div class="product-details">
            <h3>Boris Savage</h3>
            <p class="price"><span class="discount">-25%</span> $544.50</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
    <div class="product-card">
        <span class="favorite-icon" data-id="2">★</span>
        <img src="https://via.placeholder.com/250x150" alt="Product 2">
        <div class="product-details">
            <h3>Imani Hull</h3>
            <p class="price"><span class="discount">-14%</span> $686.28</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
    <div class="product-card">
        <span class="favorite-icon" data-id="3">★</span>
        <img src="https://via.placeholder.com/250x150" alt="Product 3">
        <div class="product-details">
            <h3>Product 3</h3>
            <p class="price">$798.00</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
</div>