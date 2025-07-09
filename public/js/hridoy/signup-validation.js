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
            form.reset();
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        }
    });