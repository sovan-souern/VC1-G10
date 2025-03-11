
// Filter products based on category or brand
document.getElementById('category-filter-header').addEventListener('change', function() {
    filterProducts();
});

document.getElementById('brand-filter-header').addEventListener('change', function() {
    filterProducts();
});

document.getElementById('category-filter').addEventListener('change', function() {
    filterProducts();
});

document.getElementById('brand-filter').addEventListener('change', function() {
    filterProducts();
});

function filterProducts() {
    const category = document.getElementById('category-filter-header').value.toLowerCase() ||
                     document.getElementById('category-filter').value.toLowerCase();
    const brand = document.getElementById('brand-filter-header').value.toLowerCase() ||
                  document.getElementById('brand-filter').value.toLowerCase();

    const products = document.querySelectorAll('.product');

    products.forEach(product => {
        const productCategory = product.getAttribute('data-category').toLowerCase();
        const productBrand = product.getAttribute('data-brand').toLowerCase();

        // Show product if it matches the selected filters
        if ((category === '' || productCategory.includes(category)) &&
            (brand === '' || productBrand.includes(brand))) {
            product.style.display = '';  // Show
        } else {
            product.style.display = 'none';  // Hide
        }
    });
}

