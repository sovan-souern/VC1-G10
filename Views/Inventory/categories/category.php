<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Category list</h4>
                <h6>View/Search product Category</h6>
            </div>
            <div class="page-btn">
                <a href="category/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" class="me-1" alt="img">Add Category
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
                                <span><img src="/Views/assets/img1/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="/Views/assets/img1/icons/search-white.svg" alt="img"></a>
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
                                <th>ID</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $index => $category): ?>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?php if (!empty($category['image_url'])) : ?>
                                            <img src="<?= htmlspecialchars($category['image_url'], ENT_QUOTES, 'UTF-8') ?>" width="50" alt="Category Image">
                                        <?php else : ?>
                                            <img src="/Views/assets/img1/default-image.jpg" width="50" alt="No Image">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= htmlspecialchars($category['category_name'], ENT_QUOTES, 'UTF-8') ?>
                                    </td>
                                    <td><?= htmlspecialchars($category['description'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                        <a class="me-3" href="/category/edit?id=<?= $category['id']; ?>">
                                            <img src="/Views/assets/img1/icons/edit.svg" alt="Edit">
                                        </a>
                                        <!-- <a class="me-3 confirm-text" href="category/delete?id=<?= $category['id']; ?>"> -->
                                            <img src="/Views/assets/img1/icons/delete.svg" alt="Delete">
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
