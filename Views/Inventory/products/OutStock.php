    <div class="page p-4">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product List</h4>
                    <h6>Manage your products</h6>
                </div>
                <div class="page-btn">
                    <a href="products/create" class="btn btn-added"><img src="/Views/assets/img1/icons/plus.svg" alt="img"
                            class="me-1">Add New Product</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
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
                                            <option value="">Choose Category</option>
                                            <option value="Sun screen">Sun screen</option>
                                            <option value="Night screen">Night screen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select" id="brand-filter">
                                            <option value="">Choose Brand</option>
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
                                        <select class="form-select border-0 bg-transparent text-uppercase fw-bold p-0"
                                            style="font-size: inherit; color: inherit; box-shadow: none !important; outline: none !important;" id="category-filter-header">
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
                                    <?php 
    if ($product['quantity'] > 10) {
                                            continue;
                                        }
                                        $rowClass = '';
    if ($product['quantity'] < 1) {
                                            $rowClass = 'table-danger';
                                        } elseif ($product['quantity'] < 10) {
                                            $rowClass = 'table-warning';
                                        }
                                    ?>
                                    <tr class="product <?= $rowClass ?>" data-category="<?= htmlspecialchars($product["categoryId"]) ?>" data-brand="<?= htmlspecialchars($product["brandID"]) ?>" data-price="<?= htmlspecialchars($product["price"]) ?>">
                                        <td>
                                                                                        <?= $index + 1 ?>
                                                                                </td>
                                        <td class="productimgname">
                                                                                            <a href="javascript:void(0);" class="product-img">
                                                        <img src="../../../<?= ($product["image"]) ?>" alt="product">
                                                    </a>
    <?= htmlspecialchars($product['product_name']) ?>
                                        </td>
                                        <td class="category-name">
                                                                                        <?= htmlspecialchars($product["categoryId"]) ?>
                                                                                </td>
                                        <td>
                                                                                        <?= htmlspecialchars($product["brandID"]) ?>
                                                                                </td>
                                        <td>
                                                                                        <?= htmlspecialchars($product["price"]) ?>
                                                                                </td>
                                        <td>
                                                                                        <?= htmlspecialchars($product["quantity"]) ?>
                                                                                </td>
                                        <td>
                                                <a class="me-2" href="products/view?id=<?= $product['product_id'] ?>">
                                                    <img id="img-action" src="/Views/assets/img1/icons/eye.svg" alt="img">
                                                </a>
                                                <a class="me-2" href="products/edit?id=<?= $product['product_id'] ?>">
                                                    <img id="img-delete"  src="/Views/assets/img1/icons/edit.svg" alt="img">
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
<style>
    /* General styles */
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: auto;
    }

    #img-product {
        width: 50px;
        height: 50px;
    }

    th, td {
        white-space: nowrap;
        padding: 8px;
        text-align: left;
    }

    /* Responsive adjustments for small screens */
    @media (max-width: 680px) {
        #font{
            font-size: 8px;
        }
        .table-responsive {
            overflow-x: auto;
            display: block;
        }

        table {
            width: 100%;
            display: table;
        }

        thead {
            display: table-header-group;
        }

        tbody {
            display: table-row-group;
            width: 100%;
        }

        tr {
            display: table-row;
            margin-bottom: 0;
            border-bottom: none;
            padding: 0;
        }

        td {
            display: table-cell;
            justify-content: normal;
            padding: 5px;
            font-size: 14px;
        }

        th:nth-child(5), th:nth-child(6) {
            display: none;
        }

        td::before {
            content: none;
        }

        .btn-added {
            display: block;
            text-align: center;
            width: 100%;
        }

        #font {
            font-size: 8px;
        }

        /* Hide Price and Quantity columns on small screens */
        td:nth-child(5), td:nth-child(6) {
            display: none;
        }

        td {
            font-size: 7px;
        }

        #img-product {
        width: 20px;
        height: 20px;
    }

        #hight {
            width: 10px;
            height: 10px;
        }

        select {
            cursor: pointer;
            appearance: none;
        }

        /* Dropdown effect for delete button */
        .delete-product {
            position: relative;
            display: inline-block;
        }
        #img-action{
            width: 15px;
        }
        #img-delete{
            width: 10px;
        }
    }
</style>
