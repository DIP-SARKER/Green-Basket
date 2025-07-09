document.addEventListener('DOMContentLoaded', function () {

        // === Sign Up Form Validation ===
    const form = document.getElementById('signupForm');
    const fields = {
        firstName: {
            el: document.getElementById('first-name'),
            validate: value => value.trim().length > 0,
            error: 'First name is required.'
        },
        lastName: {
            el: document.getElementById('last-name'),
            validate: value => value.trim().length > 0,
            error: 'Last name is required.'
        },
        email: {
            el: document.getElementById('email'),
            validate: value => /^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(value),
            error: 'Enter a valid email address.'
        },
        phone: {
            el: document.getElementById('phone'),
            validate: value => /^01[3-9]\d{8}$/.test(value),
            error: 'Enter a valid Bangladeshi mobile number.'
        },
        password: {
            el: document.getElementById('password'),
            validate: value => value.length >= 8,
            error: 'Password must be at least 8 characters.'
        },
        confirmPassword: {
            el: document.getElementById('confirm-password'),
            validate: () => fields.password.el.value === fields.confirmPassword.el.value,
            error: 'Passwords do not match.'
        }
    };

    Object.values(fields).forEach(field => {
        field.el.addEventListener('input', () => {
            const isValid = field.validate(field.el.value);
            showFeedback(field.el, isValid, field.error);
        });
    });

    function showFeedback(inputEl, valid, message) {
        let errorEl = inputEl.nextElementSibling;
        if (!errorEl || !errorEl.classList.contains('error-message')) {
            errorEl = document.createElement('div');
            errorEl.className = 'error-message';
            inputEl.parentNode.appendChild(errorEl);
        }
        errorEl.textContent = valid ? '' : message;
    }

    form.addEventListener('submit', e => {
        e.preventDefault();
        let formIsValid = true;

        Object.values(fields).forEach(field => {
            const isValid = field.validate(field.el.value);
            showFeedback(field.el, isValid, field.error);
            if (!isValid) formIsValid = false;
        });

        const termsAccepted = document.getElementById('terms').checked;
        if (!termsAccepted) {
            alert('Please agree to the Terms and Privacy Policy.');
            formIsValid = false;
        }

        if (formIsValid) {
            console.log('Form validated, showing alert...');
            alert('Signup successful! Welcome to Green Basket.');
            // form.reset();
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        }
    });



    // === FAQ TOGGLE ===
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });

    // === RETURN FORM ===
    const returnForm = document.getElementById('returnForm');
    const productContainer = document.getElementById('productContainer');
    const addProductBtn = document.getElementById('addProduct');

    if (returnForm && productContainer && addProductBtn) {
        addProductBtn.addEventListener('click', function () {
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
        });

        productContainer.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-product')) {
                const row = e.target.closest('.product-row');
                row.remove();
            }
        });

        returnForm.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Return request submitted successfully! We will contact you shortly.');
            returnForm.reset();
        });
    }

    // === CURRENT DATE ===
    const currentDate = document.getElementById('current-date');
    if (currentDate) {
        currentDate.textContent = new Date().toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }

    // === REFERRAL SLIDER ===
    const slider = document.getElementById('friends-count');
    const friendsValue = document.getElementById('friends-value');
    const earningsValue = document.getElementById('earnings-value');

    if (slider && friendsValue && earningsValue) {
        const earningsPerFriend = 100;

        const updateValues = () => {
            const friendCount = parseInt(slider.value);
            const earnings = friendCount * earningsPerFriend;
            friendsValue.textContent = friendCount;
            earningsValue.textContent = earnings;
        };

        updateValues();
        slider.addEventListener('input', updateValues);
    }

});
