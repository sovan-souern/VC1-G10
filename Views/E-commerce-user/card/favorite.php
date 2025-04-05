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