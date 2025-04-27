<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Favorites</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="favorites-page">
        <!-- Hero Section -->
        

        <!-- Controls -->
        <section class="controls-bar">
            <div class="search-filter">
                <input type="text" id="search-favorites" placeholder="Search favorites..." aria-label="Search favorites">
            </div>
            <div class="action-buttons">
                <a href="/shop" class="btn btn-secondary" aria-label="Back to shop">
                    <i class="fas fa-store"></i> Shop
                </a>
                <button id="share-favorites" class="btn btn-primary" aria-label="Share favorites">
                    <i class="fas fa-share"></i> Share
                </button>
                <button id="clear-favorites" class="btn btn-danger" aria-label="Clear favorites">
                    <i class="fas fa-trash"></i> Clear
                </button>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="products-grid" id="favorites-container" role="region" aria-live="polite"></section>

        <!-- Empty State -->
        <div class="empty-state" id="empty-favorites" style="display: none;">
            <img src="https://via.placeholder.com/250x250?text=No+Favorites" alt="No favorites" loading="lazy">
            <h2>No Favorites Yet</h2>
            <p>Add products to start your collection!</p>
            <a href="shop.html" class="btn btn-primary">Explore Now</a>
        </div>

        <!-- Product Modal -->
        <div id="product-modal" class="modal" role="dialog" aria-labelledby="modal-product-name" aria-hidden="true">
            <div class="modal-content">
                <button class="modal-close" aria-label="Close modal"><i class="fas fa-times"></i></button>
                <div class="modal-gallery">
                    <img id="modal-product-image" src="" alt="" loading="lazy">
                </div>
                <div class="modal-info">
                    <h2 id="modal-product-name"></h2>
                    <p class="modal-price" id="modal-product-price"></p>
                    <p class="modal-description"><strong>Description:</strong> <span id="modal-product-description"></span></p>
                    <p><strong>Stock:</strong> <span id="modal-product-quantity"></span></p>
                    <p><strong>Discount:</strong> <span id="modal-product-discount"></span>%</p>
                    <div class="quantity-control">
                        <label for="modal-quantity" class="visually-hidden">Quantity</label>
                        <input type="number" id="modal-quantity" value="1" min="1" aria-label="Select quantity">
                    </div>
                    <div class="modal-actions">
                        <button id="add-to-cart-modal" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        <button id="remove-from-favorites-modal" class="btn btn-danger"><i class="fas fa-heart-broken"></i> Remove</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading Overlay -->
        <div class="loading-overlay" id="loading-overlay" style="display: none;">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="favorites.js"></script>
</body>
</html>

<style>
    :root {
    --primary: #f9a8d4; /* Soft Emerald */
    --primary-dark: #f9a8d4;
    --secondary: #f9a8d4; /* Soft Pink */
  
    --text-dark: #1e293b;
    --text-light: #64748b;
    --white: #ffffff;
    --shadow: 0 4px 12px rgba(0, 0, 0, 0.08); /* Softer shadow for balance */
    --gradient: linear-gradient(135deg, #10b981, #f9a8d4);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: var(--background);
    color: var(--text-dark);
    line-height: 1.6;
}

.favorites-page {
    max-width: 1500px; /* Slightly reduced for balanced 5-column layout */
    margin: 0 auto;
    padding: 20px;
}

.hero-section {
    text-align: center;
    padding: 30px 20px;
    background: var(--gradient);
    color: var(--white);
    border-radius: 12px;
    margin-bottom: 25px;
}

.hero-container {
    max-width: 1200px;
    margin: 0 auto;
}

.hero-section h1 {
    font-size: 2.2rem; /* Slightly smaller for balance */
    font-weight: 600;
    margin-bottom: 8px;
}

.hero-section p {
    font-size: 1rem;
    font-weight: 300;
}

.controls-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--white);
    padding: 10px 20px;
    border-radius: 10px;
    box-shadow: var(--shadow);
    margin-bottom: 20px;
    position: sticky;
    top: 15px;
    z-index: 10;
}

.search-filter {
    flex: 1;
    max-width: 350px; /* Slightly smaller for balance */
}

.search-filter input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    font-size: 0.95rem;
    transition: border-color 0.3s ease;
}

.search-filter input:focus {
    outline: none;
    border-color: var(--primary);
}

.action-buttons {
    display: flex;
    gap: 8px;
}

.btn {
    padding: 8px 16px; /* Smaller for compact design */
    font-size: 0.9rem;
    font-weight: 500;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s ease;
}

.btn-primary {
    background: var(--primary);
    color: var(--white);
}

.btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

.btn-secondary {
    background: #e5e7eb;
    color: var(--text-dark);
}

.btn-secondary:hover {
    background: #d1d5db;
}

.btn-danger {
    background: #ef4444;
    color: var(--white);
}

.btn-danger:hover {
    background: #dc2626;
    transform: translateY(-2px);
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* Strict 5 columns */
    gap: 18px; /* Slightly reduced for balance */
    padding: 20px 0;
}

.product-card {
    background: var(--white);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}

.product-image {
    height: 180px; /* Adjusted for balanced, medium-sized cards */
    background-size: cover;
    background-position: center;
    position: relative;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: none;
}

.badge {
    position: absolute;
    top: 8px;
    right: 8px;
    padding: 5px 8px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--white);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.badge.discount { background: #ef4444; }
.badge.low-stock { background: #f59e0b; top: 32px; }
.badge.bestseller { background: var(--primary); top: 56px; }

.product-info {
    padding: 10px; /* Reduced for compact cards */
    text-align: center;
}

.product-name {
    font-size: 1rem; /* Smaller for balance */
    font-weight: 500;
    margin-bottom: 5px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.product-name:hover {
    color: var(--primary);
}

.price {
    font-size: 0.95rem; /* Adjusted for balance */
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 8px;
}

.original-price {
    font-size: 0.8rem;
    color: var(--text-light);
    text-decoration: line-through;
    margin-right: 5px;
}

.product-actions {
    display: flex;
    gap: 6px;
    justify-content: center;
}

.empty-state {
    text-align: center;
    padding: 30px 20px;
    background: var(--white);
    border-radius: 10px;
    margin: 25px 0;
    box-shadow: var(--shadow);
}

.empty-state img {
    max-width: 220px; /* Slightly smaller for balance */
    margin-bottom: 12px;
}

.empty-state h2 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.empty-state p {
    font-size: 0.95rem;
    color: var(--text-light);
    margin-bottom: 12px;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: var(--white);
    border-radius: 10px;
    max-width: 750px; /* Slightly smaller for balance */
    width: 90%;
    display: flex;
    position: relative;
    overflow: hidden;
    animation: slideIn 0.3s ease;
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.modal-close {
    position: absolute;
    top: 12px;
    right: 12px;
    background: none;
    border: none;
    font-size: 1.3rem;
    color: var(--text-dark);
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: var(--primary);
}

.modal-gallery {
    flex: 1;
    padding: 12px;
}

.modal-gallery img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
    max-height: 320px; /* Adjusted for balance */
}

.modal-info {
    flex: 1;
    padding: 12px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.modal-info h2 {
    font-size: 1.5rem; /* Slightly smaller */
    font-weight: 600;
    margin-bottom: 8px;
}

.modal-price {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: 8px;
}

.modal-description {
    font-size: 0.9rem;
    color: var(--text-light);
    margin-bottom: 8px;
}

.quantity-control {
    display: flex;
    align-items: center;
    gap: 6px;
    margin: 8px 0;
}

.quantity-control input {
    width: 65px;
    padding: 6px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    text-align: center;
    font-size: 0.9rem;
}

.modal-actions {
    display: flex;
    gap: 6px;
}

.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2000;
}

.loading-overlay i {
    font-size: 2.2rem; /* Slightly smaller */
    color: var(--primary);
}

.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
}

@media (max-width: 991px) {
    .products-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 columns for tablets */
    }

    .controls-bar {
        flex-direction: column;
        gap: 10px;
    }

    .search-filter {
        max-width: 100%;
    }

    .action-buttons {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 575px) {
    .products-grid {
        grid-template-columns: 1fr; /* 1 column for mobile */
    }

    .hero-section {
        padding: 25px 15px;
    }

    .hero-section h1 {
        font-size: 1.8rem;
    }

    .product-image {
        height: 160px; /* Adjusted for mobile */
    }

    .modal-content {
        flex-direction: column;
    }

    .modal-gallery {
        padding: 12px 12px 0;
    }

    .modal-info {
        padding: 0 12px 12px;
    }

    .modal-info h2 {
        font-size: 1.3rem;
    }

    .btn {
        padding: 6px 12px;
        font-size: 0.85rem;
    }
}
</style>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    // Elements
    const favoritesContainer = document.getElementById('favorites-container');
    const emptyFavoritesMessage = document.getElementById('empty-favorites');
    const searchInput = document.getElementById('search-favorites');
    const shareButton = document.getElementById('share-favorites');
    const clearButton = document.getElementById('clear-favorites');
    const productModal = document.getElementById('product-modal');
    const loadingOverlay = document.getElementById('loading-overlay');

    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Debounce utility
    const debounce = (func, wait) => {
        let timeout;
        return (...args) => {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    };

    function updateFavoritesUI(filteredFavorites = favorites) {
        favoritesContainer.innerHTML = '';
        loadingOverlay.style.display = 'flex';

        setTimeout(() => {
            if (filteredFavorites.length === 0) {
                emptyFavoritesMessage.style.display = 'block';
                favoritesContainer.style.display = 'none';
                loadingOverlay.style.display = 'none';
                return;
            }

            emptyFavoritesMessage.style.display = 'none';
            favoritesContainer.style.display = 'grid';
            filteredFavorites.forEach((item, index) => {
                const originalPrice = item.discount > 0 ? (parseFloat(item.price.replace('$', '')) / (1 - item.discount / 100)).toFixed(2) : item.price.replace('$', '');
                const discountBadge = item.discount > 0 ? `<span></span>` : '';
                const priceDisplay = item.discount > 0 ? `<span class="original-price">$${originalPrice}</span>${item.price}` : item.price;
                const lowStockBadge = parseInt(item.quantity) < 10 ? `<span></span>` : '';
                const bestsellerBadge = ['Vitamin C Serum', 'Hydrating Moisturizer'].includes(item.name) ? `<span></span>` : '';

                const productCard = document.createElement('div');
                productCard.classList.add('product-card');
                productCard.setAttribute('data-index', index);
                productCard.innerHTML = `
                    ${discountBadge}${lowStockBadge}${bestsellerBadge}
                    <div class="product-image" style="background-image: url('${item.image}');">
                        <img src="${item.image}" alt="${item.name}" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name" tabindex="0" aria-label="View ${item.name} details">${item.name}</h3>
                        <div class="price">${priceDisplay}</div>
                        <div class="product-actions">
                            <button class="btn btn-primary add-to-cart"
                                    data-product-name="${item.name}"
                                    data-product-price="${item.price.replace('$', '')}"
                                    data-product-image="${item.image}"
                                    data-product-discount="${item.discount}"
                                    aria-label="Add ${item.name} to cart">
                                <i class="fas fa-cart-plus"></i> Add
                            </button>
                            <button class="btn btn-danger remove-from-favorites"
                                    data-index="${index}"
                                    aria-label="Remove ${item.name} from favorites">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
                    </div>
                `;
                favoritesContainer.appendChild(productCard);
            });

            // Attach event listeners
            document.querySelectorAll('.add-to-cart').forEach(btn => btn.addEventListener('click', addToCart));
            document.querySelectorAll('.remove-from-favorites').forEach(btn => btn.addEventListener('click', removeFromFavorites));
            document.querySelectorAll('.product-name').forEach(name => name.addEventListener('click', () => openModal(favorites[name.parentElement.parentElement.dataset.index], name.parentElement.parentElement.dataset.index)));

            loadingOverlay.style.display = 'none';
        }, 200);
    }

    function addToCart(e, quantity = 1) {
        const button = e.target.closest('.add-to-cart');
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
        showToast(`${name} added to cart!`, 'Success');
    }

    function removeFromFavorites(e) {
        const index = parseInt(e.target.closest('.remove-from-favorites').getAttribute('data-index'));
        const removedItemName = favorites[index].name;
        favorites.splice(index, 1);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        applySearch();
        showToast(`${removedItemName} removed from favorites.`, 'Removed');
    }

    function clearFavorites() {
        favorites = [];
        localStorage.setItem('favorites', JSON.stringify(favorites));
        applySearch();
        showToast('Favorites cleared.', 'Cleared');
    }

    function showToast(message, title, action = '') {
        const toast = document.createElement('div');
        toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
        toast.setAttribute('role', 'alert');
        toast.innerHTML = `
            <div class="toast-header" style="background: var(--primary); color: var(--white);">
                <strong class="me-auto">${title}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${message}
                ${action}
            </div>
        `;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3500);
    }

    function openModal(item, index) {
        $('#modal-product-name').text(item.name);
        $('#modal-product-price').text(item.price);
        $('#modal-product-image').attr('src', item.image);
        $('#modal-product-description').text(item.description || 'No description available');
        $('#modal-product-quantity').text(item.quantity || 'N/A');
        $('#modal-product-discount').text(item.discount || 0);
        $('#modal-quantity').val(1);
        productModal.style.display = 'flex';

        $('#add-to-cart-modal').off('click').on('click', () => {
            const quantity = parseInt($('#modal-quantity').val()) || 1;
            addToCart({ target: { getAttribute: attr => ({
                'data-product-name': item.name,
                'data-product-price': item.price.replace('$', ''),
                'data-product-image': item.image,
                'data-product-discount': item.discount || 0
            }[attr]) } }, quantity);
            productModal.style.display = 'none';
        });

        $('#remove-from-favorites-modal').off('click').on('click', () => {
            const removedItemName = favorites[index].name;
            favorites.splice(index, 1);
            localStorage.setItem('favorites', JSON.stringify(favorites));
            applySearch();
            productModal.style.display = 'none';
            showToast(`${removedItemName} removed from favorites.`, 'Removed');
        });

        // Focus management
        document.querySelector('#modal-product-name').focus();
    }

    function applySearch() {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredFavorites = favorites.filter(item => item.name.toLowerCase().includes(searchTerm));
        updateFavoritesUI(filteredFavorites);
    }

    async function shareFavorites() {
        try {
            const shareData = encodeURIComponent(JSON.stringify(favorites));
            const shareUrl = `${window.location.origin}/favorites.html?shared=${shareData}`;
            await navigator.clipboard.writeText(shareUrl);
            showToast('Favorites link copied!', 'Shared');
        } catch (err) {
            showToast('Failed to share. Try again.', 'Error');
        }
    }

    // Event Listeners
    $('.modal-close').click(() => productModal.style.display = 'none');
    $(window).click(e => {
        if (e.target === productModal) productModal.style.display = 'none';
    });

    searchInput.addEventListener('input', debounce(applySearch, 300));
    clearButton.addEventListener('click', clearFavorites);
    shareButton.addEventListener('click', shareFavorites);

    // Accessibility
    document.querySelectorAll('.product-name, .btn').forEach(el => {
        el.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                el.click();
            }
        });
    });

    // Load shared favorites
    const urlParams = new URLSearchParams(window.location.search);
    const sharedFavorites = urlParams.get('shared');
    if (sharedFavorites) {
        try {
            const sharedData = JSON.parse(decodeURIComponent(sharedFavorites));
            if (Array.isArray(sharedData)) {
                favorites = sharedData;
                localStorage.setItem('favorites', JSON.stringify(favorites));
                showToast('Shared favorites loaded!', 'Success');
            }
        } catch (e) {
            showToast('Invalid shared favorites link.', 'Error');
        }
    }

    // Initial UI Update
    applySearch();
});
</script>