<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand List</h4>
                <h6>Manage your Brand</h6>
            </div>
            <div class="page-btn">
                <a href="brand/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" class="me-2" alt="img">Add Brand
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="/Views/assets/img1/icons/filter.svg" alt="img">
                                <span><img src="/Views/assets/img/icons/closes.svg" alt="img"></span>
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
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="/Views/assets/img1/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="/Views/assets/img1/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
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
                                <th>Image</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    <a class="product-img">
                                        <img src="/Views/assets/img1/brand/adidas.png" alt="product">
                                    </a>
                                </td>
                                <td>Adidas</td>
                                <td>Shoes, sportswear</td>
                                <td>
                                    <a class="me-3" href="brand/edit">
                                        <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="products/">
                                        <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    <a class="product-img">
                                        <img src="/Views/assets/img1/brand/nike.png" alt="product">
                                    </a>
                                </td>
                                <td>Nike</td>
                                <td>Sportswear</td>
                                <td>
                                    <a class="me-3" href="brand/edit">
                                        <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="products/">
                                        <img src="/Views/assets/img1/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Include JavaScript File -->
<script src="../../../Views/assets/js/search.js"></script>

</body>
</html>
