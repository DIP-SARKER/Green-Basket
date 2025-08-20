<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')

    <!-- Link CSS -->

    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="menu-toggle" id="mobile-menu">
                    ☰
                </div>
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">কেনাকাটা করুন</a>
                    <a href="{{ route("farmers") }}">কৃষক</a>
                    <a href="{{ route('seasonal') }}">মৌসুমি পণ্য</a>
                    <a href="{{ route("recipes") }}">রেসিপি</a>
                    <a href="{{ route("about") }}">আমাদের সম্পর্কে</a>
                    @if(Auth::guard('customer')->check())
                        <a href="{{ route('cart.index') }}">কার্ট</a>
                        <a href="{{ route('orders.index') }}">অর্ডার</a>
                        <a href="{{ route('cprofile') }}">{{ Auth::guard('customer')->user()->name }}</a>
                    @else
                        <a href="{{ route('customer_auth') }}">লগইন / সাইন আপ</a>
                    @endif
                </div>
            </nav>
        </div>
    </header>
    @yield('main-content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>গ্রিন বাস্কেট</h3>
                    <p>খামার থেকে তাজা মুদি সামগ্রী,  
                        সহজেই পৌঁছে যাবে।</p>
                </div>
                <div class="footer-column">
                    <h3>আমাদের সম্পর্কে</h3>
                    <ul>
                        <li><a href="#">আমাদের কৃষক</a></li>
                        <li><a href="{{ route('sustainability') }}">টেকসই উন্নয়ন</a></li>
                        <li><a href="{{ route('referfriends') }}">বন্ধু রেফার করুন</a></li>
                        <li><a href="#">ব্লগ</a></li>
                        <li><a href="{{ route('privacypolicy') }}">গোপনীয়তা নীতি</a></li>
                        <li><a href="{{ route('termsandcondition') }}">শর্তাবলী</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>সহায়তা</h3>
                    <ul>
                        <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                        <li><a href="{{ route('faq') }}">প্রশ্নোত্তর</a></li>
                        <li><a href="{{ route('deliveryinfo') }}">ডেলিভারি তথ্য</a></li>
                        <li><a href="{{ route('returnaproduct') }}">রিটার্ন</a></li>
                        <li><a href="{{ route('loyaltyprogram') }}">লয়ালটি প্রোগ্রাম</a></li>
                        <li><a href="{{ route('paymentsecurity') }}">পেমেন্ট নিরাপত্তা</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; ২০২৫ গ্রিন বাস্কেট। সর্বস্বত্ব সংরক্ষিত।</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
