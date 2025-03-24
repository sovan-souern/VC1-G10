<script>
    
    document.addEventListener('DOMContentLoaded', function() {
    const itemsPerPageSelect = document.getElementById('itemsPerPage');
    const productPage = document.getElementById('productPage');
    const productCards = Array.from(productPage.querySelectorAll('.product-card'));
    const prevPageBtn = document.getElementById('prevPage');
    const nextPageBtn = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');
    const searchInput = document.getElementById('brandSearch');
    const filterButton = document.getElementById('filter_search');
    const filterInputs = document.getElementById('filter_inputs');

    let currentItemsPerPage = parseInt(itemsPerPageSelect.value) || 10;
    let currentPage = 1;
    let filteredCards = [...productCards];

    // Function to update the display of product cards
    function updateDisplay() {
        const totalItems = filteredCards.length;
        const totalPages = Math.max(1, Math.ceil(totalItems / currentItemsPerPage));
        currentPage = Math.min(Math.max(1, currentPage), totalPages);

        const start = (currentPage - 1) * currentItemsPerPage;
        const end = Math.min(start + currentItemsPerPage, totalItems);

        // Show/hide cards based on current page
        productCards.forEach(card => {
            const index = filteredCards.indexOf(card);
            card.style.display = (index >= start && index < end) ? 'block' : 'none';
        });

        // Update pagination info
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
        prevPageBtn.disabled = currentPage === 1;
        nextPageBtn.disabled = currentPage === totalPages || totalItems === 0;
    }

    // Items per page change handler
    itemsPerPageSelect.addEventListener('change', function() {
        currentItemsPerPage = parseInt(this.value);
        currentPage = 1;
        updateDisplay();
    });

    // Pagination button handlers
    prevPageBtn.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            updateDisplay();
        }
    });

    nextPageBtn.addEventListener('click', function() {
        if (currentPage < Math.ceil(filteredCards.length / currentItemsPerPage)) {
            currentPage++;
            updateDisplay();
        }
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();
        filteredCards = productCards.filter(card => {
            const productTitle = card.querySelector('.product-title').textContent.toLowerCase();
            return productTitle.includes(searchTerm);
        });
        currentPage = 1;
        updateDisplay();
    });

    // Filter toggle
    filterButton.addEventListener('click', function() {
        filterInputs.classList.toggle('show-filters');
    });

    // Initial display update
    updateDisplay();
});



</script>