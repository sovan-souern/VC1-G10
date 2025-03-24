<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Discount</h4>
        <form class="my-3" action="/discount/store" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product["product_name"] ?>" >
                </div>
                <div class="input-price">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" min="0" value="<?= $product["price"] ?>">
                </div>  
                <div class="input-discount">
                    <label for="discount">Discount</label>
                    <input type="number" name="discount" id="discount" class="form-control" min="0" value="">
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
                    <div class="form-group ">
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div class="image-uploads">
                                <?php if (!empty($product["image"])): ?>
                                    <img src="../../../<?= ($product["image"]) ?>" alt="product" style="width: 120px; height: 100px;">
                                <?php else: ?>
                                    <h4 class="form-text text-muted">No image uploaded</h4>
                                <?php endif; ?>
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
    .total{
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