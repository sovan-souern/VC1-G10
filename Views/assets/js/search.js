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