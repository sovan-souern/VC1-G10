<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Discount</h4>
        <form class="my-3" id="discountForm" action="/discount/storeCategory" method="POST" onsubmit="return validateForm()">
            <div class="row">
                <div class="input-name">
                    <label for="product_name">Category Name</label>
                    <select name="category_id" id="product_name" class="form-control" required onchange="updateFormAction()">
                        <option value="" disabled selected>Select a category</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= htmlspecialchars($category['category_id']) ?>">
                                <?= htmlspecialchars($category['category_name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="input-discount">
                    <label for="discount">Discount (%)</label>
                    <input type="number" name="discount" id="discount" class="form-control" min="0" max="100" step="0.01" placeholder="Discount %" required>
                </div>
                <div class="input-startDate">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="input-endDate">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function validateForm() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;

        if (new Date(startDate) > new Date(endDate)) {
            alert('Start Date cannot be later than End Date.');
            return false;
        }
        return true;
    }

    function updateFormAction() {
        const form = document.getElementById('discountForm');
        const categorySelect = document.getElementById('product_name');
        const selectedCategoryId = categorySelect.value;

        if (selectedCategoryId) {
            form.action = `/discount/storeCategory?id=${selectedCategoryId}`;
        }
    }
</script>

<style>
    .container {
        max-width: 100%;
    }

    #product_name.form-control {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 16px;
        padding-right: 30px;
        cursor: pointer;
    }

    #product_name.form-control:hover,
    #product_name.form-control:focus {
        outline: none;
    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-bottom: 15px;
    }

    .input-name,
    .input-discount,
    .input-startDate,
    .input-endDate {
        display: flex;
        flex-direction: column;
    }

    .button-group {
        grid-column: 1 / -1;
        display: flex;
        gap: 10px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .btn {
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
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

    @media (max-width: 600px) {
        .row {
            grid-template-columns: 1fr;
        }
    }
</style>