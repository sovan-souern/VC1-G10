<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Favorites</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            padding: 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            padding: 20px;
        }

        .favorites-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .favorites-header h2 {
            font-size: 2.2rem;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        .favorites-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .favorites-controls {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
            margin-bottom: 20px;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
            padding: 10px 0;
        }

        .favorites-controls input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            flex: 1;
            min-width: 200px;
        }

        .favorites-actions {
            display: flex;
            gap: 10px;
        }

        .favorites-actions button,
        .favorites-actions a {
            padding: 10px 20px;
            background: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .favorites-actions button:hover,
        .favorites-actions a:hover {
            background: #ff3b2f;
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .product-card {
            position: relative;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease forwards;
        }

        .product-card:nth-child(2) { animation-delay: 0.1s; }
        .product-card:nth-child(3) { animation-delay: 0.2s; }
        .product-card:nth-child(4) { animation-delay: 0.3s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .discount-badge,
        .stock-badge,
        .bestseller-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .discount-badge {
            background-color: #ff5252;
            color: white;
        }

        .stock-badge {
            background-color: #ff9800;
            color: white;
            top: 40px;
        }

        .bestseller-badge {
            background-color: #4caf50;
            color: white;
            top: 70px;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
            margin-right: 8px;
        }

        .add-to-cart,
        .remove-from-favorites {
            background-color: pink;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #ff6699;
            transform: translateY(-2px);
        }

        .remove-from-favorites {
            background-color: #ff5252;
        }

        .remove-from-favorites:hover {
            background-color: #e63946;
            transform: translateY(-2px);
        }

        .empty-favorites {
            text-align: center;
            margin: 50px 0;
            padding: 20px;
            background: #f9f3f3;
            border-radius: 10px;
        }

        .empty-favorites img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .empty-favorites p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }

        .empty-favorites a {
            padding: 10px 20px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .empty-favorites a:hover {
            background: #ff3b2f;
        }

        .product-name:hover,
        .price:hover,
        .original-price:hover {
            color: #e7ab3c;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            width: 90%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #ff5252;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #e63946;
        }

        .modal-inner {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: stretch;
        }

        .modal-product-image {
            flex: 1;
            max-width: 40%;
            margin-right: 20px;
        }

        .modal-product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            max-height: 400px;
        }

        .modal-product-info {
            flex: 2;
            max-width: 60%;
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .modal-product-info h2 {
            margin-top: 0;
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .modal-product-info p {
            font-size: 1rem;
            color: #666;
            margin: 8px 0;
            line-height: 1.5;
        }

        .modal-product-info .price {
            font-size: 1.2rem;
            color: #ff5252;
            font-weight: bold;
            margin: 10px 0;
        }

        .modal-product-info .quantity-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }

        .modal-product-info .quantity-selector input {
            width: 60px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        #add-to-cart-modal,
        #remove-from-favorites-modal {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        #add-to-cart-modal {
            background-color: #ff6699;
            color: white;
        }

        #add-to-cart-modal:hover {
            background-color: #e63946;
            transform: translateY(-2px);
        }

        #remove-from-favorites-modal {
            background-color: #ff5252;
            color: white;
        }

        #remove-from-favorites-modal:hover {
            background-color: #e63946;
            transform: translateY(-2px);
        }

        /* Toast Styles */
        .toast {
            z-index: 2000;
        }

        .toast .undo-btn {
            color: #ff6f61;
            cursor: pointer;
            text-decoration: underline;
        }

        .toast .undo-btn:hover {
            color: #ff3b2f;
        }

        @media (max-width: 1199px) {
            .products-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 767px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .favorites-controls {
                flex-direction: column;
                align-items: stretch;
            }

            .favorites-controls input {
                width: 100%;
            }

            .favorites-actions {
                justify-content: center;
            }
        }

        @media (max-width: 575px) {
            body {
                padding: 10px;
                font-size: 14px;
            }

            .products-container {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 200px;
            }

            .product-info {
                padding: 10px;
            }

            .product-name {
                font-size: 1.2rem;
            }

            .price {
                font-size: 1.5rem;
            }

            .add-to-cart,
            .remove-from-favorites {
                padding: 5px;
                font-size: 0.9rem;
            }

            .favorites-header h2 {
                font-size: 1.5rem;
            }

            .modal-content {
                margin: 10% auto;
                padding: 15px;
                width: 95%;
            }

            .modal-inner {
                flex-direction: column;
            }

            .modal-product-image {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }

            .modal-product-info {
                max-width: 100%;
                padding-left: 0;
            }

            .modal-product-info h2 {
                font-size: 1.5rem;
            }

            .modal-product-info p {
                font-size: 0.9rem;
            }

            #add-to-cart-modal,
            #remove-from-favorites-modal {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>

<body>
    <section class="favorites-products">
        <div class="favorites-header">
            <h2>Favorite Products</h2>
            <p>View, manage, and share your favorite items</p>
        </div>

        <div class="favorites-controls">
            <input type="text" id="search-favorites" placeholder="Search favorites..." aria-label="Search favorites">
            <div class="favorites-actions">
                <a href="shop.html">Back to Shop</a>
                <button id="clear-favorites">Clear Favorites</button>
                <button id="share-favorites">Share Favorites</button>
            </div>
        </div>

        <div class="container">
            <div class="products-container" id="favorites-container"></div>
            <div class="empty-favorites" id="empty-favorites" style="display: none;">
                <img src="https://via.placeholder.com/200x200?text=No+Favorites" alt="No favorites">
                <p>No favorite products yet.</p>
                <a href="shop.html">Start adding some!</a>
            </div>
        </div>

        <!-- Product Modal -->
        <div id="product-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn" aria-label="Close modal">×</span>
                <div class="modal-inner">
                    <div class="modal-product-image">
                        <img id="modal-product-image" src="" alt="Product Image">
                    </div>
                    <div class="modal-product-info">
                        <h2 id="modal-product-name"></h2>
                        <p><strong>Price:</strong> <span id="modal-product-price" class="price"></span></p>
                        <p><strong>Description:</strong> <span id="modal-product-description"></span></p>
                        <p><strong>Quantity Available:</strong> <span id="modal-product-quantity"></span></p>
                        <p><strong>Discount:</strong> <span id="modal-product-discount"></span>%</p>
                        <div class="quantity-selector">
                            <label for="modal-quantity">Quantity:</label>
                            <input type="number" id="modal-quantity" value="1" min="1" aria-label="Select quantity">
                        </div>
                        <button id="add-to-cart-modal">Add to Cart</button>
                        <button id="remove-from-favorites-modal">Remove from Favorites</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Data and Elements
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const favoritesContainer = document.getElementById('favorites-container');
            const emptyFavoritesMessage = document.getElementById('empty-favorites');
            const clearFavoritesBtn = document.getElementById('clear-favorites');
            const shareFavoritesBtn = document.getElementById('share-favorites');
            const searchInput = document.getElementById('search-favorites');

            function updateFavoritesUI(filteredFavorites = favorites) {
                favoritesContainer.innerHTML = '';

                if (filteredFavorites.length === 0) {
                    emptyFavoritesMessage.style.display = 'block';
                    return;
                }

                emptyFavoritesMessage.style.display = 'none';
                filteredFavorites.forEach((item, index) => {
                    const originalPrice = item.discount > 0 ? (parseFloat(item.price.replace('$', '')) / (1 - item.discount / 100)).toFixed(2) : item.price.replace('$', '');
                    const discountBadge = item.discount > 0 ? `<div class="discount-badge">-${item.discount}%</div>` : '';
                    const priceDisplay = item.discount > 0 ? `<span class="original-price">$${originalPrice}</span>${item.price}` : item.price;
                    const lowStockBadge = parseInt(item.quantity) < 10 ? `<div class="stock-badge">Low Stock</div>` : '';
                    const bestsellerBadge = ['Vitamin C Serum', 'Hydrating Moisturizer'].includes(item.name) ? `<div class="bestseller-badge">Best Seller</div>` : '';

                    const productCard = document.createElement('div');
                    productCard.classList.add('product-card');
                    productCard.innerHTML = `
                        ${discountBadge}${lowStockBadge}${bestsellerBadge}
                        <div class="product-image" style="background-image: url('${item.image}');">
                            <img src="${item.image}" alt="${item.name}" loading="lazy">
                        </div>
                        <div class="product-info">
                            <h5 class="product-name" data-index="${index}">${item.name}</h5>
                            <div class="price">${priceDisplay}</div>
                            <button class="add-to-cart"
                                    data-product-name="${item.name}"
                                    data-product-price="${item.price.replace('$', '')}"
                                    data-product-image="${item.image}"
                                    data-product-discount="${item.discount}"
                                    aria-label="Add ${item.name} to cart">
                                Add to Cart
                            </button>
                            <button class="remove-from-favorites" data-index="${index}" aria-label="Remove ${item.name} from favorites">
                                Remove from Favorites
                            </button>
                        </div>
                    `;
                    favoritesContainer.appendChild(productCard);

                    productCard.querySelector('.add-to-cart').addEventListener('click', addToCart);
                    productCard.querySelector('.remove-from-favorites').addEventListener('click', removeFromFavorites);
                    productCard.querySelector('.product-name').addEventListener('click', () => openModal(item, index));
                });
            }

            function addToCart(e, quantity = 1) {
                const button = e.target;
                const name = button.getAttribute('data-product-name');
                const price = parseFloat(button.getAttribute('data-product-price'));
                const image = button.getAttribute('data-product-image');
                const discount = parseFloat(button.getAttribute('data-product-discount')) || 0;

                const existingItemIndex = cart.findIndex(item => item.name === name);
                if (existingItemIndex > -1) {
                    cart[existingItemIndex].quantity += quantity;
                } else {
                    cart.push({ name, price, image, discount, quantity });
                }

                localStorage.setItem('cart', JSON.stringify(cart));

                showToast(`${name} has been added to your cart.`, 'Added to Cart');
            }

            function removeFromFavorites(e) {
                const index = parseInt(e.target.getAttribute('data-index'));
                const removedItem = favorites[index];
                favorites.splice(index, 1);
                localStorage.setItem('favorites', JSON.stringify(favorites));
                applySearch();

                showToast(
                    `${removedItem.name} has been removed from your favorites.`,
                    'Removed from Favorites',
                    `<span class="undo-btn" data-item='${JSON.stringify(removedItem)}'>Undo</span>`
                );
            }

            function clearFavorites() {
                const previousFavorites = [...favorites];
                favorites = [];
                localStorage.setItem('favorites', JSON.stringify(favorites));
                applySearch();

                showToast(
                    'All favorites have been cleared.',
                    'Favorites Cleared',
                    `<span class="undo-btn" data-items='${JSON.stringify(previousFavorites)}'>Undo</span>`
                );
            }

            function showToast(message, title, action = '') {
                const toast = document.createElement('div');
                toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');
                toast.innerHTML = `
                    <div class="toast-header">
                        <strong class="me-auto">${title}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${message}
                        ${action}
                    </div>
                `;
                document.body.appendChild(toast);

                if (action) {
                    toast.querySelector('.undo-btn').addEventListener('click', function() {
                        const item = this.getAttribute('data-item');
                        const items = this.getAttribute('data-items');
                        if (item) {
                            favorites.push(JSON.parse(item));
                        } else if (items) {
                            favorites = JSON.parse(items);
                        }
                        localStorage.setItem('favorites', JSON.stringify(favorites));
                        applySearch();
                        toast.remove();
                    });
                }

                setTimeout(() => toast.remove(), 5000);
            }

            function openModal(item, index) {
                $('#modal-product-name').text(item.name);
                $('#modal-product-price').text(item.price);
                $('#modal-product-image').attr('src', item.image);
                $('#modal-product-description').text(item.description);
                $('#modal-product-quantity').text(item.quantity);
                $('#modal-product-discount').text(item.discount);
                $('#modal-quantity').val(1);
                $('#product-modal').fadeIn();

                $('#add-to-cart-modal').off('click').on('click', function() {
                    const quantity = parseInt($('#modal-quantity').val()) || 1;
                    addToCart({ target: { getAttribute: (attr) => ({
                        'data-product-name': item.name,
                        'data-product-price': item.price.replace('$', ''),
                        'data-product-image': item.image,
                        'data-product-discount': item.discount
                    }[attr]) } }, quantity);
                    $('#product-modal').fadeOut();
                });

                $('#remove-from-favorites-modal').off('click').on('click', function() {
                    const removedItem = favorites[index];
                    favorites.splice(index, 1);
                    localStorage.setItem('favorites', JSON.stringify(favorites));
                    applySearch();
                    $('#product-modal').fadeOut();

                    showToast(
                        `${removedItem.name} has been removed from your favorites.`,
                        'Removed from Favorites',
                        `<span class="undo-btn" data-item='${JSON.stringify(removedItem)}'>Undo</span>`
                    );
                });
            }

            function applySearch() {
                let filteredFavorites = [...favorites];
                const searchTerm = searchInput.value.toLowerCase();

                if (searchTerm) {
                    filteredFavorites = filteredFavorites.filter(item => item.name.toLowerCase().includes(searchTerm));
                }

                updateFavoritesUI(filteredFavorites);
            }

            function shareFavorites() {
                const shareData = encodeURIComponent(JSON.stringify(favorites));
                const shareUrl = `${window.location.origin}/favorites.html?shared=${shareData}`;
                navigator.clipboard.writeText(shareUrl).then(() => {
                    showToast('Favorites link copied to clipboard!', 'Share Favorites');
                }).catch(() => {
                    showToast('Failed to copy link. Please try again.', 'Error');
                });
            }

            // Event Listeners
            $('.close-btn').click(function() {
                $('#product-modal').fadeOut();
            });

            $(window).click(function(event) {
                if ($(event.target).is('#product-modal')) {
                    $('#product-modal').fadeOut();
                }
            });

            clearFavoritesBtn.addEventListener('click', clearFavorites);
            shareFavoritesBtn.addEventListener('click', shareFavorites);
            searchInput.addEventListener('input', applySearch);

            // Accessibility: Keyboard navigation
            document.querySelectorAll('.product-name, button').forEach(el => {
                el.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        el.click();
                    }
                });
            });

            // Load shared favorites from URL
            const urlParams = new URLSearchParams(window.location.search);
            const sharedFavorites = urlParams.get('shared');
            if (sharedFavorites) {
                try {
                    const sharedData = JSON.parse(decodeURIComponent(sharedFavorites));
                    if (Array.isArray(sharedData)) {
                        favorites = sharedData;
                        localStorage.setItem('favorites', JSON.stringify(favorites));
                        showToast('Loaded shared favorites!', 'Favorites Loaded');
                    }
                } catch (e) {
                    showToast('Invalid shared favorites link.', 'Error');
                }
            }

            // Animate on Scroll
            function checkIfInView() {
                const animateElements = document.querySelectorAll('.product-card');
                animateElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('animate');
                    }
                });
            }
            window.addEventListener('scroll', checkIfInView);
            checkIfInView();

            // Initial UI Update
            applySearch();
        });
    </script>
</body>
</html>