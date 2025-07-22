document.getElementById('show-login').addEventListener('click', function() {
    document.getElementById('register-form').classList.remove('active');
    document.getElementById('login-form').classList.add('active');
});

document.getElementById('show-register').addEventListener('click', function() {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('register-form').classList.add('active');
});