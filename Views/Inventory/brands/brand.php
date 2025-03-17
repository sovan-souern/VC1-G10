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
                                <th>ID</th>
                                <th>Image</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="brand-list">
                            <?php foreach ($brands as $index => $brand) : ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <a class="product-img">
                                            <img src="/<?= $brand["brand_image"] ?>" alt="product">
                                        </a>
                                    </td>
                                    <td class="brand-name"> <?= $brand["brand_name"] ?> </td>
                                    <td><?= $brand["description"] ?></td>
                                    <td>
                                        <a class="me-3" href="brand/edit?id=<?= $brand["id"] ?>">
                                            <img src="/Views/assets/img1/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="delete-product" href="/brand/delete?id=<?= $brand['id'] ?>">
                                            <img src="/Views/assets/img1/icons/delete.svg" alt="img">
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