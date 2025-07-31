<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Green-Basket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dip/common.css') }}">
    @stack('style')

</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            @stack('title')
            <div class="header-actions">
                {{-- <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Product
        </button> --}}
                <div class="user-info">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <img src="https://dip-sarker.github.io/DIP_SARKER/images/home.png" alt="Admin">
                        <div class="info">
                            <div class="name">DIP SARKER</div>
                            <div class="role">Administrator</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert">
            @if (session('success'))
                <div class="success-msg alert-msg">
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            @if ($errors->any())
                <div class="error-msg alert-msg">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif
        </div>
        <!-- Dynamic Page Content -->
        @yield('dashboard-content')
    </div>

    @stack('script')
</body>

</html>
