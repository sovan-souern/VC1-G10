<style>
    /* Base styles for the product list */
.page {
  background-color: #f9f9f9;
}
.page-btn{}
.card {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  margin-bottom: 20px;
}

.page-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  flex-wrap: wrap;
  gap: 15px;
}

.page-title h4 {
  font-size: 22px;
  margin-bottom: 5px;
}

.page-title h6 {
  color: #6c757d;
  margin: 0;
}

.btn-added {
  background-color: #ff9f43;
  color: white;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-added:hover {
  background-color: #ff8f1f;
}

.btn-added img {
  margin-right: 5px;
  width: 16px;
  height: 16px;
}

/* Table top section */
.table-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  flex-wrap: wrap;
  gap: 15px;
}

.search-set {
  display: flex;
  align-items: center;
  gap: 10px;
}

.search-path {
  display: flex;
}

.btn-filter {
  background-color: #f8f9fa;
  border: 1px solid #dee2e6;
  border-radius: 4px;
  padding: 6px 12px;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.btn-filter img {
  width: 16px;
  height: 16px;
}

.search-input input {
  border: 1px solid #dee2e6;
  border-radius: 4px;
  padding: 8px 12px;
  width: 220px;
}

/* Items per page dropdown */
.items-per-page-dropdown {
  display: flex;
  align-items: center;
  margin-left: auto;
}

.items-per-page-dropdown label {
  margin-right: 8px;
  font-weight: 500;
}

.items-per-page-dropdown select {
  width: 70px;
  padding: 6px 10px;
  border-radius: 4px;
  border: 1px solid #dee2e6;
  background-color: #fff;
  cursor: pointer;
}

/* Filter inputs */
#filter_inputs {
  display: none;
  margin-bottom: 20px;
}

#filter_inputs.show-filters {
  display: block;
}

.form-group {
  margin-bottom: 15px;
}

.select {
  width: 100%;
  padding: 8px 12px;
  border-radius: 4px;
  border: 1px solid #dee2e6;
  background-color: #fff;
}

.btn-filters {
  background-color: #ff9f43;
  color: white;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

/* Product table */
.table-responsive {
  overflow-x: auto;
  margin-bottom: 20px;
  border-radius: 8px;
  border: 1px solid #eee;
}

.product-table {
  width: 100%;
  border-collapse: collapse;
}

.product-table th {
  background-color: #f8f9fa;
  padding: 12px 15px;
  text-align: left;
  font-weight: 600;
  color: #495057;
  border-bottom: 2px solid #dee2e6;
  white-space: nowrap;
}

.product-table td {
  padding: 12px 15px;
  border-bottom: 1px solid #eee;
  vertical-align: middle;
}

.product-table tr:last-child td {
  border-bottom: none;
}

.product-table tr:hover {
  background-color: #f8f9fa;
}

/* Product info */
.product-info {
  display: flex;
  align-items: center;
  gap: 10px;
}

.product-image {
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 4px;
}

.product-name {
  font-weight: 500;
}

/* Action buttons */
.action-buttons {
  display: flex;
  gap: 8px;
}

.action-btn {
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
  background-color: #f8f9fa;
  border: 1px solid #eee;
  transition: background-color 0.2s;
}

.action-btn:hover {
  background-color: #e9ecef;
}

.action-btn img {
  width: 16px;
  height: 16px;
}

.view-btn:hover {
  background-color: #e3f2fd;
}

.edit-btn:hover {
  background-color: #e8f5e9;
}

.delete-btn:hover {
  background-color: #ffebee;
}

/* Pagination */
.pagination-container {
  margin-top: 20px;
}

.pagination-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 15px;
}

.pagination-info {
  color: #6c757d;
  font-size: 14px;
}

.pagination {
  display: flex;
  gap: 5px;
}

.page-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 36px;
  height: 36px;
  /* padding: 0 10px; */
  border-radius: 4px;
  background-color: #fff;
  border: 1px solid #dee2e6;
  color: #495057;
  text-decoration: none;
  transition: all 0.2s;
}

.page-btn:hover {
  background-color: #f8f9fa;
  border-color: #c1c9d0;
}

.page-btn.active {
  background-color: #ff9f43;
  border-color: #ff9f43;
  color: white;
}

.prev-btn,
.next-btn {
  font-weight: bold;
}

/* Category and brand select in table header */
.category-select,
.brand-select {
  border: none;
  background-color: transparent;
  font-weight: 600;
  color: #495057;
  padding: 0;
  cursor: pointer;
  width: 100%;
  outline: none;
  box-shadow: none;
}

/* Responsive styles */
@media (max-width: 1200px) {
  .product-table th,
  .product-table td {
    padding: 10px 12px;
  }

  .action-btn {
    width: 28px;
    height: 28px;
  }

  .action-btn img {
    width: 14px;
    height: 14px;
  }
}

@media (max-width: 992px) {
  .page-title h4 {
    font-size: 20px;
  }

  .search-input input {
    width: 180px;
  }
}

@media (max-width: 768px) {
  .page-header {
    flex-direction: column;
    align-items: flex-start;
  }

  /* .page-btn {
    width: 100%;
  } */

  .table-top {
    flex-direction: column;
    align-items: flex-start;
  }

  .items-per-page-dropdown {
    margin-left: 0;
  }

  .pagination-row {
    flex-direction: column;
    align-items: center;
  }

  .pagination-info {
    text-align: center;
  }

  /* Adjust table columns for tablet */
  .category-column,
  .brand-column {
    display: table-cell;
  }

  .product-image {
    width: 36px;
    height: 36px;
  }
}

@media (max-width: 576px) {
  /* Mobile view optimizations */
  .page {
    padding: 10px !important;
  }

  .card-body {
    padding: 15px 10px;
  }

  .page-title h4 {
    font-size: 18px;
  }

  .page-title h6 {
    font-size: 14px;
  }

  .search-set {
    width: 100%;
  }

  .search-input {
    flex-grow: 1;
  }

  .search-input input {
    width: 100%;
  }

  /* Table adjustments for mobile */
  .product-table {
    font-size: 14px;
  }

  .product-table th,
  .product-table td {
    padding: 8px 6px;
  }

  /* Hide less important columns on mobile */
  .category-column,
  .brand-column,
  .price-column {
    display: none;
  }

  /* Make product name column more compact */
  .product-info {
    gap: 6px;
  }

  .product-image {
    width: 30px;
    height: 30px;
  }

  /* Compact action buttons */
  .action-buttons {
    gap: 4px;
  }

  .action-btn {
    width: 24px;
    height: 24px;
  }

  .action-btn img {
    width: 12px;
    height: 12px;
  }

  /* Pagination adjustments */
  .page-btn {
    min-width: 32px;
    height: 32px;
    font-size: 14px;
  }
}

/* Extra small devices */
@media (max-width: 400px) {
  .product-table th,
  .product-table td {
    padding: 6px 4px;
    font-size: 12px;
  }

  .id-column {
    width: 30px;
  }

  .product-image {
    width: 24px;
    height: 24px;
  }

  .action-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 3px;
  }

  .action-btn {
    width: 20px;
    height: 20px;
  }

  .action-btn img {
    width: 10px;
    height: 10px;
  }
}


</style>