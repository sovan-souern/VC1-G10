<div class="container mt-4">
    <div class="card p-4">
        <h4>Edit Discount</h4>
        <form class="my-3" action="/discount/update" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product["product_name"] ?>">
                </div>
                <div class="input-price">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" min="0" step="0.01" value="<?= $product["price"] ?>" oninput="calculateTotal()">
                </div>  
                <div class="input-discount">
                    <label for="discount">Discount (%)</label>
                    <input type="number" name="discount" id="discount" class="form-control" min="0" max="100" value="<?= $discount["discount_percentage"] ?>" oninput="calculateTotal()">
                </div>  
                <div class="input-startDate">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="<?= $discount["start_date"] ?>">
                </div>  
                <div class="input-endDate">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="<?= $discount["end_date"] ?>">
                </div>  
                <div class="total">
                    <h6>Total: <span id="total_price"><?= number_format($product["price"] * (1 - $discount["discount_percentage"] / 100), 2) ?></span></h6>
                </div>  
                <div class="input-group">
                    <label class="file" for="image">Product Image</label>
                    <div class="form-group">
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div class="image-uploads">
                                <?php if (!empty($product["image"])): ?>
                                    <img src="../../../<?= ($product["image"]) ?>" alt="product" >
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
    </div>
</div>

<script>
function calculateTotal() {
    // Get the values for price and discount from the form
    let price = parseFloat(document.getElementById('price').value);
    let discount = parseFloat(document.getElementById('discount').value);
    
    // Check if values are valid numbers
    if (isNaN(price)) price = 0;
    if (isNaN(discount)) discount = 0;
    
    // Calculate the total price after discount
    let total = price * (1 - discount / 100);
    
    // Display the calculated total in the DOM with 2 decimal places
    document.getElementById('total_price').innerText = total.toFixed(2);
}

// Calculate total on page load to ensure correct initial value
document.addEventListener('DOMContentLoaded', function() {
    calculateTotal();
});
</script>

<style>
    .row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "name price image"
            "discount startDate image"
            "endDate total image"
            "buttons buttons image";
        gap: 10px;
    }

    .input-name {
        grid-area: name;
    }

    .input-price {
        grid-area: price;
    }

    .input-discount {
        grid-area: discount;
    }

    .input-startDate {
        grid-area: startDate;
    }

    .input-endDate {
        grid-area: endDate;
    }

    .total {
        grid-area: total;
        position: relative;
        /* left: 10px;   */
        top: 30px;
        /* padding: 10px 0; */
    }
   

    .input-group {
        grid-area: image;
    }

    .button-group {
        grid-area: buttons;
        text-align: left;
        margin-top: 10px;
    }

    /* Ensure the image section takes up the same height as the content and brand sections */
    .input-group {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .form-group {
        height: 72%;
        position: relative;
        bottom: 35px;
    }

    .image-upload {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    

    .image-uploads img {
        max-width: 50%;
        height: auto;
        margin-bottom: 10px;
        object-fit: contain;
    }

    .image-uploads h4 {
        margin: 5px 0;
        font-size: 14px;
        color: #6c757d;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn {
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        margin-right: 10px;
    }

    .btn-success {
        background-color: #28a745;
        color: white;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
    }

    @media (max-width: 768px) {
        .row {
            grid-template-columns: 1fr;
            grid-template-areas:
                "name"
                "price"
                "discount"
                "startDate"
                "endDate"
                "total"
                "image"
                "buttons";
        }

        .form-group {
            height: 20vh    ;
            position: static;
        }
        

        .image-uploads {
            min-height: 150px;
           
        }
        .image-uploads img {
        max-width: 25%;
        height: auto;
        margin-bottom: 10px;
        object-fit: contain;
    }

    }
</style>