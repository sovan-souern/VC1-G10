document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('brandSearch');
    const productList = document.getElementById('product-list');
    searchInput.addEventListener('input', function() {
        const searchValue = searchInput.value.toLowerCase();
        const products = productList.getElementsByTagName('tr');
        Array.from(products).forEach(function(row) {
            const productName = row.querySelector('.productimgname p').textContent.toLowerCase();
            if (productName.includes(searchValue)) {
                row.style.display = ''; 
            } else {
                row.style.display = 'none';
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('brandSearch');
    const brandList = document.getElementById('brand-list');
    const rows = brandList.getElementsByTagName('tr');

    searchInput.addEventListener('input', function() {
        const searchValue = searchInput.value.toLowerCase();
        Array.from(rows).forEach(function(row) {
            const brandName = row.querySelector('.brand-name').textContent.toLowerCase();
            if (brandName.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('brandSearch');
    const productList = document.getElementById('product-list'); // Corrected ID
    const rows = productList.getElementsByTagName('tr');

    searchInput.addEventListener('input', function() {
        const searchValue = searchInput.value.toLowerCase();
        Array.from(rows).forEach(function(row) {
            const productName = row.querySelector('td:nth-child(2)').textContent.toLowerCase(); // Correct column
            if (productName.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});