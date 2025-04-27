
    document.addEventListener('DOMContentLoaded', function() {
        // Function to filter products based on selected category and brand
        function filterProducts() {
            const categoryFilter = document.getElementById('category-filter').value;
            const categoryFilterHeader = document.getElementById('category-filter-header').value;
            const brandFilter = document.getElementById('brand-filter').value;
            const brandFilterHeader = document.getElementById('brand-filter-header').value;

            // Use the value from whichever dropdown was changed (prioritize non-empty value)
            const selectedCategory = categoryFilter || categoryFilterHeader || '';
            const selectedBrand = brandFilter || brandFilterHeader || '';

            const products = document.querySelectorAll('.product');

            products.forEach(function(product) {
                const productCategory = product.getAttribute('data-category');
                const productBrand = product.getAttribute('data-brand');

                // Determine if the product matches the filters
                const matchesCategory = selectedCategory ? productCategory === selectedCategory : true;
                const matchesBrand = selectedBrand ? productBrand === selectedBrand : true;

                // Show the product only if it matches both filters (or if a filter is not set)
                if (matchesCategory && matchesBrand) {
                    product.style.display = ''; // Show the product
                } else {
                    product.style.display = 'none'; // Hide the product
                }
            });
        }

        // Add event listeners to all filter dropdowns
        document.getElementById('category-filter').addEventListener('change', filterProducts);
        document.getElementById('category-filter-header').addEventListener('change', filterProducts);
        document.getElementById('brand-filter').addEventListener('change', filterProducts);
        document.getElementById('brand-filter-header').addEventListener('change', filterProducts);
    });
