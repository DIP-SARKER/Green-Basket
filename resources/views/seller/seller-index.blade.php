<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Seller Dashboard</title>
    @stack('style')
    <link rel="stylesheet" href="{{ asset('css/hridoy/seller/index.css') }}">

</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('seller.dashboard') }}" class="sidebar-brand">SellerHUB</a>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Main</div>
                    <div class="nav-item">
                        <a href="{{ route('seller.dashboard') }}"
                            class="nav-link {{ Request::routeIs('seller.dashboard') ? 'active' : '' }}">
                            <span class="nav-icon">📊</span>
                            Dashboard
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ route('seller.allProducts') }}"
                            class="nav-link {{ Request::routeIs('seller.products.*') ? 'active' : '' }}">
                            <span class="nav-icon">📦</span>
                            Inventory
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="" class="nav-link {{ Request::routeIs('seller.orders.*') ? 'active' : '' }}">
                            <span class="nav-icon">🛒</span>
                            Orders
                        </a>
                    </div>
                    
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Analytics</div>
                    <div class="nav-item">
                        <a href="" class="nav-link {{ Request::routeIs('seller.reports.sales') ? 'active' : '' }}">
                            <span class="nav-icon">📈</span>
                            Sales Reports
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="" class="nav-link {{ Request::routeIs('seller.reports.revenue') ? 'active' : '' }}">
                            <span class="nav-icon">💰</span>
                            Revenue
                        </a>
                    </div>
                    
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Settings</div>
                    
                    <div class="nav-item">
                        <a href="{{ route('seller.profile') }}" class="nav-link {{ Request::routeIs('seller.profile.*') ? 'active' : '' }}">
                            <span class="nav-icon">👤</span>
                            Profile
                        </a>
                    </div>
                </div>


            </nav>

            <!-- Logout Section at Bottom -->
            <div class="sidebar-footer">
                <div class="nav-item">
                    <form method="POST" action="{{ route('seller_logout') }}" class="logout-form">
                        @csrf
                        <button type="submit" class="nav-link logout-btn">
                            <span class="nav-icon">🚪</span>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>
        </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="dashboard-header">
                <div class="header-left">
                    <button class="mobile-menu-btn" onclick="toggleSidebar()">☰</button>
                    <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="header-right">
                    <div class="header-actions">
                        @yield('header-actions')
                        <button class="notification-btn">🔔</button>
                        <button class="profile-btn" onclick="window.location.href='{{ route('seller.profile') }}'">
                            <div class="profile-avatar">
                                {{ strtoupper(substr(Auth::guard('seller')->user()->name ?? 'U', 0, 2)) }}
                            </div>
                        </button>

                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="content-area">
                @yield('main-content')
            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function (event) {
            const sidebar = document.getElementById('sidebar');
            const menuBtn = document.querySelector('.mobile-menu-btn');

            if (window.innerWidth <= 768 &&
                !sidebar.contains(event.target) &&
                !menuBtn.contains(event.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function () {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth > 768) {
                sidebar.classList.remove('active');
            }
        });

        @yield('additional-scripts')
    </script>
</body>

</html>