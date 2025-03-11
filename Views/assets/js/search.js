document.getElementById("brandSearch").addEventListener("input", function () {
    var searchTerm = this.value.toLowerCase();
    var products = document.querySelectorAll(".product"); // All product rows

    products.forEach(function (product) {
        var productName = product.querySelector("td.productimgname a").textContent.toLowerCase();
        var productBrand = product.querySelector("td:nth-child(4)").textContent.toLowerCase(); // Assuming the brand is in the 4th column
        
        // Check if the search term matches the product name or brand
        if (productName.includes(searchTerm) || productBrand.includes(searchTerm)) {
            product.style.display = ""; // Show the product
        } else {
            product.style.display = "none"; // Hide the product
        }
    });
});
