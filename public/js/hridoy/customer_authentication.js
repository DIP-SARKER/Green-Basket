document.addEventListener('DOMContentLoaded', function() {
    // Toggle between login and register forms
    const showRegisterBtn = document.getElementById('show-register');
    const showRegisterAltBtn = document.getElementById('show-register-alt');
    const showLoginBtn = document.getElementById('show-login');
    const showLoginAltBtn = document.getElementById('show-login-alt');
    
    const loginFormContainer = document.getElementById('login-form-container');
    const loginAlternate = document.getElementById('login-alternate');
    const registerFormContainer = document.getElementById('register-form-container');
    const registerAlternate = document.getElementById('register-alternate');
    
    // Show register form
    function showRegister() {
        loginFormContainer.classList.remove('visible-section');
        loginFormContainer.classList.add('hidden-section');
        loginAlternate.classList.remove('hidden-section');
        loginAlternate.classList.add('visible-section');
        
        registerAlternate.classList.remove('visible-section');
        registerAlternate.classList.add('hidden-section');
        registerFormContainer.classList.remove('hidden-section');
        registerFormContainer.classList.add('visible-section');
    }
    
    // Show login form
    function showLogin() {
        loginAlternate.classList.remove('visible-section');
        loginAlternate.classList.add('hidden-section');
        loginFormContainer.classList.remove('hidden-section');
        loginFormContainer.classList.add('visible-section');
        
        registerFormContainer.classList.remove('visible-section');
        registerFormContainer.classList.add('hidden-section');
        registerAlternate.classList.remove('hidden-section');
        registerAlternate.classList.add('visible-section');
    }
    
    // Event listeners for toggle buttons
    if (showRegisterBtn) showRegisterBtn.addEventListener('click', showRegister);
    if (showRegisterAltBtn) showRegisterAltBtn.addEventListener('click', showRegister);
    if (showLoginBtn) showLoginBtn.addEventListener('click', showLogin);
    if (showLoginAltBtn) showLoginAltBtn.addEventListener('click', showLogin);
    
    // Form validation
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    function validatePassword(password) {
        return password.length >= 8;
    }
    
    function validatePhone(phone) {
        const re = /^[0-9]{10,15}$/;
        return re.test(phone);
    }
    
    function showError(inputId, message) {
        const inputGroup = document.querySelector(`#${inputId}`).parentElement;
        const errorElement = inputGroup.querySelector('.error-message');
        inputGroup.classList.add('error');
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }
    
    function clearError(inputId) {
        const inputGroup = document.querySelector(`#${inputId}`).parentElement;
        inputGroup.classList.remove('error');
        const errorElement = inputGroup.querySelector('.error-message');
        errorElement.style.display = 'none';
    }
    
    // Login form submission
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        
        const email = document.getElementById('login-email').value.trim();
        const password = document.getElementById('login-password').value;
        
        // Validate email
        if (!email) {
            showError('login-email', 'Email is required');
            isValid = false;
        } else if (!validateEmail(email)) {
            showError('login-email', 'Please enter a valid email');
            isValid = false;
        } else {
            clearError('login-email');
        }
        
        // Validate password
        if (!password) {
            showError('login-password', 'Password is required');
            isValid = false;
        } else {
            clearError('login-password');
        }
        
        if (isValid) {
            // Submit form
            alert('Login successful!');
            // You would typically add your login logic here
        }
    });
    
    // Register form submission
    document.getElementById('register-form').addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        
        const name = document.getElementById('register-name').value.trim();
        const email = document.getElementById('register-email').value.trim();
        const phone = document.getElementById('register-phone').value.trim();
        const password = document.getElementById('register-password').value;
        const confirmPassword = document.getElementById('register-confirm-password').value;
        const terms = document.getElementById('terms').checked;
        
        // Validate name
        if (!name) {
            showError('register-name', 'Full name is required');
            isValid = false;
        } else {
            clearError('register-name');
        }
        
        // Validate email
        if (!email) {
            showError('register-email', 'Email is required');
            isValid = false;
        } else if (!validateEmail(email)) {
            showError('register-email', 'Please enter a valid email');
            isValid = false;
        } else {
            clearError('register-email');
        }
        
        // Validate phone
        if (!phone) {
            showError('register-phone', 'Phone number is required');
            isValid = false;
        } else if (!validatePhone(phone)) {
            showError('register-phone', 'Please enter a valid phone number');
            isValid = false;
        } else {
            clearError('register-phone');
        }
        
        // Validate password
        if (!password) {
            showError('register-password', 'Password is required');
            isValid = false;
        } else if (!validatePassword(password)) {
            showError('register-password', 'Password must be at least 8 characters');
            isValid = false;
        } else {
            clearError('register-password');
        }
        
        // Validate confirm password
        if (!confirmPassword) {
            showError('register-confirm-password', 'Please confirm your password');
            isValid = false;
        } else if (password !== confirmPassword) {
            showError('register-confirm-password', 'Passwords do not match');
            isValid = false;
        } else {
            clearError('register-confirm-password');
        }
        
        // Validate terms
        if (!terms) {
            showError('terms', 'You must accept the terms and conditions');
            isValid = false;
        } else {
            clearError('terms');
        }
        
        if (isValid) {
            // Submit form
            alert('Registration successful!');
            // You would typically add your registration logic here
        }
    });
    
    // Clear errors on input
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', function() {
            clearError(this.id);
        });
    });
});