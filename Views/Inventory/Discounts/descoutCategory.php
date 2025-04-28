<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Product Discount</h4>
        <form class="my-3" action="/discount/storeCategory?id=<?= $categories['category_id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name">
                    <label for="product_name">Category Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $categories["category_name"] ?? '' ?>" readonly>
                </div>
                <div class="input-discount">
                    <label for="discount">Discount (%)</label>
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
                <div class="button-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-areas:
            "name discount"
            "start_date end_date"
            "buttons buttons";
        gap: 15px;
    }

    .input-name {
        grid-area: name;
    }

    .input-discount {
        grid-area: discount;
    }

    .input-startDate {
        grid-area: start_date;
    }

    .input-endDate {
        grid-area: end_date;
    }

    .button-group {
        grid-area: buttons;
        text-align: left;
        margin-top: 20px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: inline-block;
    }

    .form-control {
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 4px;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: black;
    }

    @media (max-width: 768px) {
        .row {
            grid-template-columns: 1fr;
            grid-template-areas:
                "name"
                "discount"
                "start_date"
                "end_date"
                "buttons";
        }

        .button-group {
            text-align: center;
        }
    }
</style>