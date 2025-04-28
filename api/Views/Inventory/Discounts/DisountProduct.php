<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Discount</h4>
        <form class="my-3" action="/discount/store" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name">
                    <label for="product_name">Product Name </label>
                    <select name="product_id" id="product_name" class="form-control">
                        <option value="" disabled selected>Select a product </option>
                        <?php foreach ($products as $key => $product): ?>
                            <option value="<?= htmlspecialchars($product['product_id']) ?>"
                                data-image="<?= htmlspecialchars($product['image']) ?>"
                                data-price="<?= htmlspecialchars($product['price']) ?>">
                                <?= htmlspecialchars($product['product_name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-price">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" min="0" value="<?= $product["price"] ?>">
                </div>
                <div class="input-discount">
                    <label for="discount">Discount</label>
                    <input type="number" name="discount" id="discount" class="form-control" min="0" value="" placeholder="Discount %">
                </div>
                <div class="input-startDate">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                </div>
                <div class="input-endDate">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control">
                </div>
                <div class="total">
                    <h6>Total: <span id="total-price"><?= $product["price"] ?></span></h6>
                </div>
                <div class="input-group">
                    <label class="file" for="file">Product Image</label>
                    <div class="form-group">
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div class="image-uploads">
                                <img id="product-image" src="/Views/assets/img1/icons/upload.svg" alt="product" style="width: 120px; height: 100px;">
                                <h4 class="form-text text-muted">Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                </div>
            </div>
            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['product_id']) ?>">
            <input type="hidden" name="existing_image" value="<?= htmlspecialchars($product['image']) ?>">
        </form>

        <script>
            // Get DOM elements
            const productDropdown = document.getElementById('product_name');
            const productImage = document.getElementById('product-image');

            // Default upload icon
            const defaultIcon = '/Views/assets/img1/icons/upload.svg';

            // Update image based on selected product
            productDropdown.addEventListener('change', function() {
                const selectedOption = productDropdown.options[productDropdown.selectedIndex];
                const imageUrl = selectedOption.getAttribute('data-image');
                productImage.src = imageUrl && imageUrl !== 'null' && imageUrl !== '' ? `../../../${imageUrl}` : defaultIcon;
                productImage.alt = imageUrl && imageUrl !== 'null' && imageUrl !== '' ? 'product' : 'upload';
            });

            // Set default icon on page load
            productImage.src = defaultIcon;
            productImage.alt = 'upload';

            // Get DOM elements for price and discount
            const priceInput = document.getElementById('price');
            const discountInput = document.getElementById('discount');
            const totalPrice = document.getElementById('total-price');

            // Function to calculate and update total
            function updateTotal() {
                const price = parseFloat(priceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const discountedPrice = price - (price * (discount / 100));
                totalPrice.textContent = discountedPrice.toFixed(2);
            }

            // Add event listeners
            priceInput.addEventListener('input', updateTotal);
            discountInput.addEventListener('input', updateTotal);

            // Initial calculation
            updateTotal();
        </script>
    </div>
</div>
<style>
    /* Style for the product name dropdown */
    #product_name.form-control {
        appearance: none;
        /* Remove default browser arrow */
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
        /* Custom black arrow */
        background-repeat: no-repeat;
        background-position: right 10px center;
        /* Position arrow on the right */
        background-size: 16px;
        /* Size of the arrow */
        padding-right: 30px;
        /* Space for arrow */
        cursor: pointer;
        /* Indicate clickable */
    }

    /* Optional: Hover and focus effects for better UX */
    #product_name.form-control:hover,
    #product_name.form-control:focus {

        outline: none;

    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "name  price image "
            " descount descount image"
            "content content image"
            "buttons buttons image";
        gap: 10px;
    }

    .input-name {
        grid-area: name;
    }

    .input-quantity {
        grid-area: quantity;
    }

    .input-price {
        grid-area: price;
    }

    .input-category {
        grid-area: category;
    }

    .input-descount {
        grid-area: descount;
    }

    .input-group {
        grid-area: image;
    }

    .product-content {
        grid-area: content;
    }

    .button-group {
        grid-area: buttons;
        text-align: center;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .form-group {
        height: 72%;
    }

    .form-group {
        position: relative;
        bottom: 25px;
    }

    .image-upload {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .image-uploads {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .image-uploads img {
        max-width: 100%;
        height: auto;
    }

    .image-uploads h4 {
        margin: 0;
    }

    label {
        font-weight: bold;
    }

    .button-group {
        grid-area: buttons;
        text-align: left;
    }

    .total {
        position: relative;
        top: 25px;
    }

    @media (max-width: 600px) {
        .row {
            grid-template-columns: 1fr;
            grid-template-areas:
                "name"
                "quantity"
                "price"
                "category"
                "brand"
                "content"
                "image"
                "buttons";
        }

        .form-group {
            height: 22vh;
        }

        .form-group {
            position: relative;
            top: 0px;
        }
    }
</style>