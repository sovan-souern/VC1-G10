<?php require_once "Views/assets/css/prodcut_style.php" ?>

<div class="page p-4">
    <div class="content">
        <div class="page-header ">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="products/create" class="btn btn-added"><img src="/Views/assets/img1/icons/plus.svg" alt="img"
                        class="me-1">Add New Product</a>
            </div>
        </div>
        <div class="card bg-none w-100">
            <div class="card-body ">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="/Views/assets/img1/icons/filter.svg" alt="img">
                                <span><img src="/Views/assets/img1/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <form class="form-inline">
                                <input id="brandSearch" class="form-control mr-sm-2" type="search" placeholder="Search Brand Name" aria-label="Search">
                            </form>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="/Views/assets/img1/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="/Views/assets/img1/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="/Views/assets/img1/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="category-filter">
                                        <option  value=""> Choose Category </option>
                                        <option value="Sun screen">Sun screen</option>
                                        <option value="Night screen">Night screen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="brand-filter">
                                        <option value="">▼ Choose Brand</option>
                                        <option value="Addedas">Addedas</option>
                                        <option value="zoon">Zoon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="price-filter">
                                        <option value="">Choose Price</option>
                                        <option value="1500.00">1500.00</option>
                                        <option value="1000.00">1000.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="/Views/assets/img1/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-res ponsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th id="font">ID</th>
                                <th id="font">Product Name</th>
                                <th id="font">
                                    <select class="form-select border-0 bg-transparent text-uppercase fw-bold p-10"
                                        style="font-size: 10px; color: inherit; box-shadow: none !important; outline: none !important;" id="category-filter-header">
                                        <option value="">Category</option>
                                        <?php foreach ($categories as $key => $category) : ?>
                                            <option value="<?= htmlspecialchars($category["category_name"]) ?>"><?= htmlspecialchars($category["category_name"]) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </th>
                                <th id="font">
                                    <select class="form-select border-0 bg-transparent text-uppercase fw-bold p-0"
                                        style="font-size: inherit; color: inherit; box-shadow: none !important; outline: none !important;" id="brand-filter-header">
                                        <option value="">Brand</option>
                                        <?php foreach ($brands as $key => $brand) : ?>
                                            <option value="<?= htmlspecialchars($brand["brand_name"]) ?>"><?= htmlspecialchars($brand["brand_name"]) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </th>
                                <th id="font">Price</th>
                                <th id="font">Qty</th>
                                <th id="font">Action</th>
                            </tr>
                        </thead>
                        <tbody id="product-list">
                            <?php foreach ($products as $index => $product) : ?>
                                <!-- <?= htmlspecialchars($product["image"]) ?> -->
                                <tr class="product" st data-category="<?= htmlspecialchars($product["categoryId"]) ?>" data-brand="<?= htmlspecialchars($product["brandID"]) ?>" data-price="<?= htmlspecialchars($product["price"]) ?>">
                                    <td><?= $index + 1 ?></td>
                                    <td class="productimgname">
                                        <img id="img-product" src="<?= htmlspecialchars($product["image"]) ?>" alt="product">
                                        <?= htmlspecialchars($product["product_name"]) ?>
                                    </td>
                                    <td class="category-name"><?= htmlspecialchars($product["categoryId"]) ?></td>
                                    <td><?= htmlspecialchars($product["brandID"]) ?></td>
                                    <td><?= htmlspecialchars($product["quantity"]) ?></td>
                                    <td><?= htmlspecialchars($product["price"]) ?> $</td>
                                    <td class="actoin">
                                        <a class="delete-product" href="products/delete?id=<?= $product['product_id'] ?>">
                                         <img id="hight" class="size-image" src="/Views/assets/img/dicount.png" alt="">
                                        </a>
                                        <a class="" href="products/view?id=<?= $product['product_id'] ?>">
                                            <img id="hight"  src="/Views/assets/img1/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="edit" href="products/edit?id=<?= $product['product_id'] ?>">
                                            <img id="hight" src="/Views/assets/img1/icons/edit.svg" alt="img">
                                        </a>



                                        <a class="delete-product" href="products/delete?id=<?= $product['product_id'] ?>">
                                            <img id="hight" src="/Views/assets/img1/icons/delete.svg" alt="img">
                                            <?php require "delete.php" ?>
                                        </a>
                                        

                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("#product-list tr").forEach(row => {
            let quantity = parseInt(row.querySelector("td:nth-child(6)").textContent.trim(), 10);
            let productName = row.querySelector("td:nth-child(2)").textContent.trim();

            if (quantity === 0) {
                alert(`⚠️ ${productName} is OUT OF STOCK!`);
            } else if (quantity <= 9) {
                alert(`⚠️ ${productName} is running LOW on stock (Only ${quantity} left)!`);
            }
        });
    });
</script>
