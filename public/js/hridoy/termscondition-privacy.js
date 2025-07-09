    // === CURRENT DATE ===
    const currentDate = document.getElementById('current-date');
    if (currentDate) {
        currentDate.textContent = new Date().toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }