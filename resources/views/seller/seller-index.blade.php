<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Seller Dashboard')</title>

    <!-- Bootstrap CSS (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hridoy/seller/index.css') }}">

    @stack('styles')
    @stack('head-scripts')
</head>

<body>
    <div class="dashboard-layout">
        <!-- Sidebar -->
        <aside class="dashboard-sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('seller.dashboard') }}" class="sidebar-logo">
                    <i class="fas fa-store"></i>
                    <span>Seller Hub</span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Main</div>
                    <a href="{{ route('seller.dashboard') }}"
                        class="nav-item {{ request()->routeIs('seller.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-chart-bar"></i>
                        Dashboard
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Products</div>
                    <a href="{{ route('seller.allProducts') }}"
                        class="nav-item {{ request()->routeIs('seller.allProducts') ? 'active' : '' }}">
                        <i class="fas fa-box"></i>
                        All Products
                    </a>
                    <a href="{{ route('seller.products.create') }}"
                        class="nav-item {{ request()->routeIs('seller.products.create') ? 'active' : '' }}">
                        <i class="fas fa-plus"></i>
                        Add Product
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-tags"></i>
                        Categories
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Orders</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-shopping-cart"></i>
                        All Orders
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-clock"></i>
                        Pending Orders
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-truck"></i>
                        Shipped Orders
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Business</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-chart-line"></i>
                        Analytics
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-star"></i>
                        Reviews
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-dollar-sign"></i>
                        Earnings
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Account</div>
                    <a href="{{ route('seller.profile') }}"
                        class="nav-item {{ request()->routeIs('seller.profile') ? 'active' : '' }}">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                    <a href="{{ route('seller_logout') }}" class="nav-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('seller_logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Header -->
            <header class="top-header">
                <div class="header-left">
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="header-right">
                    <div class="user-menu">
                        <div class="user-avatar">
                            {{ substr(Auth::guard('seller')->user()->name ?? 'S', 0, 1) }}
                        </div>
                        <div class="user-info">
                            <div class="user-name">{{ Auth::guard('seller')->user()->name ?? 'Seller' }}</div>
                            <div class="user-role">Seller</div>
                        </div>
                        <i class="fas fa-chevron-down" style="font-size: 0.75rem; color: #6b7280;"></i>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="content-area">
                @yield('main-content')
            </div>
        </main>
    </div>

    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            function toggleSidebar() {
                sidebar.classList.toggle('open');
                sidebarOverlay.classList.toggle('active');
                document.body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
            }

            function closeSidebar() {
                sidebar.classList.remove('open');
                sidebarOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', toggleSidebar);
            }

            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', closeSidebar);
            }

            // Close sidebar on escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeSidebar();
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>