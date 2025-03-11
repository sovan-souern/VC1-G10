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
                            <!-- Category Filter -->
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="category-filter">
                                        <option value="">Choose Category</option>
                                        <option value="Sun screen">Sun screen</option>
                                        <option value="Night screen">Night screen</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Brand Filter -->
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select" id="brand-filter">
                                        <option value="">Choose Brand</option>
                                        <option value="Addedas">Addedas</option>
                                        <option value="zoon">Zoon</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Price Filter -->
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

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>
                                    <select class="form-select border-0 bg-transparent text-uppercase fw-bold p-0"
                                        style="font-size: inherit; color: inherit; box-shadow: none !important; outline: none !important;" id="category-filter-header">
                                        <option value="">Category</option>
                                        <option value="Sun screen">Sun screen</option>
                                        <option value="Night screen">Night screen</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select border-0 bg-transparent text-uppercase fw-bold p-0"
                                        style="font-size: inherit; color: inherit; box-shadow: none !important; outline: none !important;" id="brand-filter-header">
                                        <option value="">Brand</option>
                                        <option value="Addedas">Addedas</option>
                                        <option value="zoon">Zoon</option>
                                    </select>
                                </th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="product-list">
                            <!-- Product Row -->
                            <tr class="product" data-category="Sun screen" data-brand="Addedas" data-price="1500.00">
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="/Views/assets/img1/product/product1.jpg" alt="product">   
                                    </a>
                                    <a href="javascript:void(0);">Macbook pro</a>
                                </td>
                                <td class="category-name">Sun screen</td>
                                <td>Addedas</td>
                                <td>1500.00</td>
                                <td>100.00</td>
                                <td>
                                    <a class="me-3" href="products/view">
                                        <img src="/Views/assets/img1/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="products/edit">
                                        <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="products/">
                                        <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr class="product" data-category="Night screen" data-brand="zoon" data-price="1000.00">
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="/Views/assets/img1/product/product2.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Macbook pro</a>
                                </td>
                                <td class="category-name">Night screen</td>
                                <td>zoon</td>
                                <td>1000.00</td>
                                <td>150.00</td>
                                <td>
                                    <a class="me-3" href="products/view">
                                        <img src="/Views/assets/img1/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="products/edit">
                                        <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="products/">
                                        <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <!-- More products here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../../../Views/assets/js/search.js"></script>
<script src="../../../Views/assets/js/select.js"></script>