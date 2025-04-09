<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Your Shopping Cart</h1>
        
        <!-- Loading Spinner (initially hidden) -->
        <div id="loading-spinner" class="text-center py-5">
            <div class="spinner-border text-pink" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        
        <!-- Empty Cart Message (initially hidden) -->
        <div id="empty-cart" class="card p-5 text-center d-none">
            <div class="mb-4">
                <div class="rounded-circle bg-pink-light p-3 d-inline-flex justify-content-center align-items-center" style="width: 80px; height: 80px;">
                    <i class="bi bi-cart text-pink" style="font-size: 2rem;"></i>
                </div>
            </div>
            <h2 class="fs-3 mb-2">Your cart is empty</h2>
            <p class="text-muted mb-4">Looks like you haven't added anything to your cart yet.</p>
            <button class="btn btn-pink mx-auto" style="max-width: 200px;" onclick="window.location.href='/'">
                Continue Shopping
            </button>
        </div>
        
        <!-- Cart Content -->
        <div id="cart-content" class="d-none">
            <div class="row g-4">
                <!-- Cart Items Section -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fs-3 mb-3">My Cart</h2>
                            <hr>
                            
                            <!-- Cart Items Container -->
                            <div id="cart-items" class="py-2">
                                <!-- Items will be added here dynamically -->
                            </div>
                            
                            <hr>
                            
                            <!-- Cart Actions -->
                            <div class="d-flex align-items-center text-muted cursor-pointer" id="add-note">
                                <i class="bi bi-sticky me-2"></i>
                                <span>Add a note</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary Section -->
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fs-3 mb-3">Order Summary</h2>
                            <hr>
                            
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Subtotal</span>
                                <span id="subtotal">$0.00</span>
                            </div>
                            
                            <hr>
                            
                            <div class="d-flex justify-content-between mb-4">
                                <span class="fs-5 fw-semibold">Total</span>
                                <span id="total" class="fs-5 fw-semibold">$0.00</span>
                            </div>
                            
                            <button id="checkout-btn" class="btn btn-pink w-100 py-3 mb-3 fw-medium">
                                Checkout
                            </button>
                            
                            <div class="d-flex justify-content-center align-items-center text-muted small">
                                <i class="bi bi-lock me-1"></i>
                                <span>Secure Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Toast Container for Notifications -->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto" id="toast-title">Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="summary-row">
                    <span>Delivery</span>
                    <span class="delivery-cost">$5.99</span>
                </div>
             
               
                <hr>
                <div class="summary-row total">
                    <span>Total</span>
                    <span class="total-amount">$0.00</span>
                </div>
                <button class="checkout-btn primary" onclick="window.location.href='checkout';">Checkout</button>
               
                <div class="secure-checkout">
                    <i class="fa-solid fa-lock"></i>
                    <span>Secure Checkout</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
<style>
    /* Custom Colors */
:root {
    --pink: #ffb6c1;
    --pink-hover: #ffaab8;
    --pink-light: #ffe0e5;
}

body {
    background-color: #f8f9fa;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

/* Custom Button Styles */
.btn-pink {
    background-color: var(--pink);
    color: #212529;
    border: none;
}

.btn-pink:hover, .btn-pink:focus {
    background-color: var(--pink-hover);
    color: #212529;
}

/* Text Colors */
.text-pink {
    color: var(--pink) !important;
}

.bg-pink-light {
    background-color: var(--pink-light) !important;
}

/* Cart Item Styles */
.cart-item {
    transition: all 0.3s ease;
    animation: fadeIn 0.3s ease-in-out;
}

.cart-item:not(:last-child) {
    border-bottom: 1px solid #eee;
}

.cart-item-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    background-color: #f1f1f1;
}

.quantity-control {
    display: inline-flex;
    align-items: center;
    border: 1px solid #dee2e6;
    border-radius: 4px;
}

.quantity-btn {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: none;
    border: none;
    font-size: 1rem;
    cursor: pointer;
}

.quantity-input {
    width: 40px;
    height: 32px;
    text-align: center;
    border: none;
    border-left: 1px solid #dee2e6;
    border-right: 1px solid #dee2e6;
    background-color: white;
}

.remove-btn {
    color: #6c757d;
    background: none;
    border: none;
    cursor: pointer;
    transition: color 0.2s;
}

.remove-btn:hover {
    color: #dc3545;
}

/* Cursor Pointer */
.cursor-pointer {
    cursor: pointer;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeIn 0.3s ease-in-out;
}

</style>
<script>
    // cart-script.js
// cart-script.js
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const cartItemsContainer = document.querySelector('.cart-items');
    const subtotalEl = document.querySelector('.subtotal');
    const totalEl = document.querySelector('.total-amount');
    const deliveryCostEl = document.querySelector('.delivery-cost');
    const promoCode = document.querySelector('.promo-code');
    const addNote = document.querySelector('.add-note');

    // Initialize cart items
    let cartItems = [];
    const deliveryCost = 5.99; // Fixed delivery cost

  // Cart Data
  let cartItems = []

  // Initialize
  initializeCart()

  // Event Listeners
  addNoteButton.addEventListener("click", addNote)
  checkoutButton.addEventListener("click", handleCheckout)

  // Functions
  function initializeCart() {
    // Show loading spinner
    loadingSpinner.classList.remove("d-none")

    // Simulate loading delay (remove in production)
    setTimeout(() => {
      // Load cart from localStorage
      try {
        const savedCart = localStorage.getItem("cart")
        const parsedCart = savedCart ? JSON.parse(savedCart) : []

        // If there's no saved cart, add some sample items for demo purposes
        if (!savedCart || parsedCart.length === 0) {
          const sampleItems = [
            {
              id: "1",
              name: "Stylish T-Shirt",
              price: 29.99,
              quantity: 1,
              image: "https://via.placeholder.com/100",
            },
            {
              id: "2",
              name: "Designer Jeans",
              price: 59.99,
              quantity: 2,
              image: "https://via.placeholder.com/100",
            },
          ]
          cartItems = sampleItems
          localStorage.setItem("cart", JSON.stringify(sampleItems))
        } else {
          cartItems = parsedCart
        }

        // Render cart
        renderCart()
      } catch (e) {
        console.error("Error parsing cart from localStorage:", e)
        cartItems = []
        renderCart()
      }

      // Hide loading spinner
      loadingSpinner.classList.add("d-none")
    }, 500)
  }

  function renderCart() {
    if (cartItems.length === 0) {
      // Show empty cart message
      emptyCartMessage.classList.remove("d-none")
      cartContent.classList.add("d-none")
    } else {
      // Show cart content
      emptyCartMessage.classList.add("d-none")
      cartContent.classList.remove("d-none")

      // Clear cart items container
      cartItemsContainer.innerHTML = ""

      // Render each cart item
      cartItems.forEach((item) => {
        const cartItemElement = createCartItemElement(item)
        cartItemsContainer.appendChild(cartItemElement)
      })

      // Update summary
      updateSummary()
    }
  }

  function createCartItemElement(item) {
    const cartItem = document.createElement("div")
    cartItem.className = "cart-item py-3"
    cartItem.dataset.id = item.id

    cartItem.innerHTML = `
            <div class="row align-items-center g-3">
                <div class="col-md-2 col-4">
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image rounded">
                </div>
                <div class="col-md-4 col-8">
                    <h3 class="fs-5 mb-1">${item.name}</h3>
                    <p class="text-muted mb-0">$${item.price.toFixed(2)}</p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="quantity-control">
                        <button class="quantity-btn minus">−</button>
                        <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                        <button class="quantity-btn plus">+</button>
                    </div>
                </div>
                <div class="col-md-2 col-4 text-end">
                    <span class="fw-semibold">$${(item.price * item.quantity).toFixed(2)}</span>
                </div>
                <div class="col-md-1 col-2 text-end">
                    <button class="remove-btn">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
        `

    // Add event listeners
    const minusButton = cartItem.querySelector(".minus")
    const plusButton = cartItem.querySelector(".plus")
    const removeButton = cartItem.querySelector(".remove-btn")

    minusButton.addEventListener("click", () => updateItemQuantity(item.id, item.quantity - 1))
    plusButton.addEventListener("click", () => updateItemQuantity(item.id, item.quantity + 1))
    removeButton.addEventListener("click", () => removeItem(item.id))

    return cartItem
  }

  function updateItemQuantity(id, newQuantity) {
    if (newQuantity < 1) return

    // Update cart items
    cartItems = cartItems.map((item) => {
      if (item.id === id) {
        return { ...item, quantity: newQuantity }
      }
      return item
    })

    // Update localStorage
    localStorage.setItem("cart", JSON.stringify(cartItems))

    // Update UI
    const cartItem = document.querySelector(`.cart-item[data-id="${id}"]`)
    if (cartItem) {
      const quantityInput = cartItem.querySelector(".quantity-input")
      const itemTotal = cartItem.querySelector(".fw-semibold")
      const item = cartItems.find((item) => item.id === id)

      quantityInput.value = newQuantity
      itemTotal.textContent = `$${(item.price * newQuantity).toFixed(2)}`

      // Update summary
      updateSummary()
    }
  }

  function removeItem(id) {
    // Remove item from cart
    cartItems = cartItems.filter((item) => item.id !== id)

    // Update localStorage
    localStorage.setItem("cart", JSON.stringify(cartItems))

    // Show toast notification
    showToast("Item removed", "The item has been removed from your cart")

    // Re-render cart
    renderCart()
  }

  function updateSummary() {
    const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0)

    subtotalElement.textContent = `$${subtotal.toFixed(2)}`
    totalElement.textContent = `$${subtotal.toFixed(2)}`
  }

  function addNote() {
    const note = prompt("Add a note to your order:")
    if (note) {
      showToast("Note added", `"${note}" has been added to your order`)
    }
  }

    // Update order summary
    function updateSummary() {
        const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
        subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
        const total = subtotal + deliveryCost;
        totalEl.textContent = `$${total.toFixed(2)}`;
        deliveryCostEl.textContent = `$${deliveryCost.toFixed(2)}`;
    }

</script>