<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    <title>FarmConnect - Farmer Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/hridoy/seller/index.css') }}">

</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="logo-text">FarmConnect</div>
        </div>

        <div class="nav-item active">
            <a href="{{ route('seller.dashboard') }}"><i class="fas fa-home"></i>
                <span class="nav-text">Dashboard</span></a>

        </div>
        <div class="nav-item">
            <a href="{{ route('seller.allProducts') }}">
                <i class="fas fa-shopping-basket"></i>
                <span class="nav-text">Products</span>
            </a>

        </div>
        <div class="nav-item">
            <i class="fas fa-file-invoice-dollar"></i>
            <span class="nav-text">Orders</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-chart-line"></i>
            <span class="nav-text">Analytics</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-truck"></i>
            <span class="nav-text">Delivery</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-comments"></i>
            <span class="nav-text">Messages</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-cog"></i>
            <span class="nav-text">Settings</span>
        </div>

        <div class="farmer-info">
            <div class="farmer-avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="farmer-details">
                <div class="farmer-name">{{ Auth::guard('seller')->user()->name }}</div>
                <div class="farmer-type">Organic Produce Farm</div>
            </div>
        </div>
    </div>

    @yield('main-content')

    <div class="dashboard-footer">
        FarmConnect Seller Dashboard • © 2023 All Rights Reserved
    </div>
    </div>

    <script>
        // Simple interactivity for the dashboard
        document.addEventListener('DOMContentLoaded', function () {
            // Set active nav item
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function () {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function (e) {
                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    const rect = button.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.backgroundColor = 'rgba(255,255,255,0.4)';

                    button.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>
</body>

</html>