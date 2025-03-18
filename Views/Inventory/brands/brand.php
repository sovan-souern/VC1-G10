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
                            <li><a data-bs-toggle="tooltip" title="pdf"><img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" title="excel"><img src="/Views/assets/img1/icons/excel.svg" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" title="print"><img src="/Views/assets/img1/icons/printer.svg" alt="img"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="table-container">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Brand Name</th>
                                <th class="description-column">Brand Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="brand-list">
                            <?php foreach ($brands as $index => $brand) : ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <img id="image-brand" src="/<?= $brand["brand_image"] ?>" alt="brand">
                                    </td>
                                    <td class="brand-name"><?= $brand["brand_name"] ?></td>
                                    <td class="description-column"><?= $brand["description"] ?></td>
                                    <td class="action-column">
                                        <a class="me-3" href="brand/edit?id=<?= $brand["id"] ?>">
                                            <img class="icon" src="/Views/assets/img1/icons/edit.svg" alt="edit">
                                        </a>
                                        <a class="delete-product" href="/brand/delete?id=<?= $brand['id'] ?>">
                                            <img class="icon" src="/Views/assets/img1/icons/delete.svg" alt="delete">
                                            <?php require "delete.php"; ?>
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
/* General Styles */
.page {
    width: 100%;
    padding: 1rem;
    box-sizing: border-box;
}

.page-header, .table-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

/* Search and Filters */
.search-set {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.search-input input {
    padding: 0.5rem;
}

/* Export Buttons */
.wordset ul {
    display: flex;
    list-style: none;
    padding: 0;
    gap: 0.5rem;
}

/* Table */
.table-container {
    width: 100%;
    overflow-x: auto;
}

.table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

th, td {
    padding: 0.6rem;
    text-align: left;
    word-wrap: break-word;
    font-size: 0.9rem;
}

/* Images */
#image-brand {
    max-width: 40px;
    height: auto;
}

/* Column Widths (Desktop) */
th:nth-child(1), td:nth-child(1) { width: 8%; } /* ID */
th:nth-child(2), td:nth-child(2) { width: 12%; } /* Image */
th:nth-child(3), td:nth-child(3) { width: 28%; } /* Brand Name */
th:nth-child(4), td:nth-child(4) { width: 36%; } /* Description */
th:nth-child(5), td:nth-child(5) { width: 16%; } /* Action */

/* Tablet (max-width: 768px) */
@media (max-width: 768px) {
    .page {
        padding: 0.5rem;
    }

    .page-header, .table-top {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }

    .search-set {
        width: 100%;
    }

    .search-input input {
        width: 100%;
        box-sizing: border-box;
    }

    .wordset ul {
        justify-content: flex-start;
    }

    .table {
        font-size: 0.9rem;
    }

    th, td {
        padding: 0.5rem;
    }

    /* Adjust column widths */
    th:nth-child(1), td:nth-child(1) { width: 12%; }
    th:nth-child(2), td:nth-child(2) { width: 22%; }
    th:nth-child(3), td:nth-child(3) { width: 40%; }
    th:nth-child(5), td:nth-child(5) { width: 20%; }

    #image-brand {
        max-width: 30px;
    }

    .action-column a img {
        width: 18px;
    }
}

/* Mobile (max-width: 480px) */
@media (max-width: 480px) {
    .description-column {
        display: none;
    }

    .page-title h4 {
        font-size: 1.1rem;
    }

    .page-title h6 {
        font-size: 0.8rem;
    }

    .btn {
        padding: 0.4rem;
        font-size: 0.8rem;
    }

    .table {
        font-size: 0.8rem;
    }

    th, td {
        padding: 0.4rem;
    }

    #image-brand {
        max-width: 22px;
    }

    .action-column a img {
        width: 16px;
    }
}
</style>
