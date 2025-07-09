// Return Form Functionality
document.addEventListener('DOMContentLoaded', function() {
    const returnForm = document.getElementById('returnForm');
    const productContainer = document.getElementById('productContainer');
    const addProductBtn = document.getElementById('addProduct');
    
    // Add product row
    addProductBtn.addEventListener('click', function() {
        const newRow = document.createElement('div');
        newRow.className = 'product-row';
        newRow.innerHTML = `
            <input type="text" name="productName[]" placeholder="Product name" required>
            <input type="number" name="productQty[]" placeholder="Qty" min="1" required>
            <select name="productReason[]" required>
                <option value="">Reason</option>
                <option value="damaged">Damaged</option>
                <option value="spoiled">Spoiled</option>
                <option value="wrong">Wrong Item</option>
            </select>
            <button type="button" class="remove-product">×</button>
        `;
        productContainer.appendChild(newRow);
        
        // Show remove buttons if more than one row
        if (document.querySelectorAll('.product-row').length > 1) {
            document.querySelectorAll('.remove-product').forEach(btn => {
                btn.style.display = 'block';
            });
        }
    });
    
    // Remove product row
    productContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-product')) {
            const row = e.target.closest('.product-row');
            row.remove();
            
            // Hide remove button if only one row left
            if (document.querySelectorAll('.product-row').length === 1) {
                document.querySelector('.remove-product').style.display = 'none';
            }
        }
    });
    
    // Form submission
    returnForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your server
        alert('Return request submitted successfully! We will contact you shortly.');
        returnForm.reset();
    });
});