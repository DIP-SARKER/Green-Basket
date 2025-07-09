@extends('index')
@push('style')
<title>Terms & Condition | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/sakib/termsandcondition.css') }}">
@endpush

@section('main-content')
<section class="terms-section">
    <div class="container">
        <h1 class="terms-title">Terms of Service</h1>
        <p class="terms-update">Last Updated: <span id="current-date"></span></p>

        <div class="terms-intro">
            <p>Welcome to <strong>Green Basket</strong>! These Terms of Service govern your use of our website (<a href="https://www.greenbasket.com.bd">www.greenbasket.com.bd</a>) and mobile application (if applicable). By accessing or using our services, you agree to comply with these terms.</p>
        </div>

        <!-- Section 1: Acceptance of Terms -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">1</span> Acceptance of Terms</h2>
            <p>By using Green Basket, you confirm that:</p>
            <ul>
                <li>You are at least <strong>18 years old</strong> or using the platform with parental consent.</li>
                <li>You agree to comply with all applicable laws in <strong>Bangladesh</strong>.</li>
                <li>You will not misuse the platform for illegal activities.</li>
            </ul>
        </div>

        <!-- Section 2: Account Registration -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">2</span> Account Registration</h2>
            <ul>
                <li>You must provide <strong>accurate information</strong> when creating an account.</li>
                <li>You are responsible for maintaining the confidentiality of your login credentials.</li>
                <li>Green Basket reserves the right to <strong>suspend or terminate</strong> accounts that violate these terms.</li>
            </ul>
        </div>

        <!-- Section 3: Ordering & Payments -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">3</span> Ordering & Payments</h2>
            <ul>
                <li>All orders are subject to <strong>product availability</strong>.</li>
                <li>We accept payments via <strong>bKash, Nagad, Rocket, and cards</strong> (processed securely via SSLCommerz).</li>
                <li>Prices are listed in <strong>Bangladeshi Taka (৳)</strong> and may change without notice.</li>
            </ul>
        </div>

        <!-- Section 4: Delivery & Returns -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">4</span> Delivery & Returns</h2>
            <ul>
                <li>Delivery times may vary based on <strong>location and weather conditions</strong>.</li>
                <li>Returns must comply with our <a href="{{ route('returnaproduct') }}">Return Policy</a>.</li>
                <li>Perishable goods (vegetables, dairy, meat) <strong>cannot be returned</strong> unless spoiled or damaged.</li>
            </ul>
        </div>

        <!-- Section 5: User Conduct -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">5</span> User Conduct</h2>
            <p>You agree <strong>not</strong> to:</p>
            <ul>
                <li>Use automated bots/scrapers to extract data.</li>
                <li>Harass farmers, delivery personnel, or other users.</li>
                <li>Upload false reviews or misleading information.</li>
            </ul>
        </div>

        <!-- Section 6: Intellectual Property -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">6</span> Intellectual Property</h2>
            <ul>
                <li>All content (logos, text, images) belongs to <strong>Green Basket</strong>.</li>
                <li>Unauthorized use is prohibited.</li>
            </ul>
        </div>

        <!-- Section 7: Limitation of Liability -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">7</span> Limitation of Liability</h2>
            <p>Green Basket is <strong>not liable</strong> for:</p>
            <ul>
                <li>Delays due to natural disasters, strikes, or political unrest.</li>
                <li>Minor discrepancies in product weight or appearance.</li>
            </ul>
        </div>

        <!-- Section 8: Changes to Terms -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">8</span> Changes to Terms</h2>
            <p>We may update these terms periodically. Continued use after changes implies acceptance.</p>
        </div>

        <!-- Section 9: Governing Law -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">9</span> Governing Law</h2>
            <p>These terms are governed by the laws of <strong>Bangladesh</strong>. Any disputes will be resolved in Dhaka courts.</p>
        </div>

        <!-- Contact Information -->
        <div class="terms-contact">
            <h3>Questions?</h3>
            <p>Contact us at:</p>
            <div class="contact-methods">
                <a href="mailto:legal@greenbasket.com.bd" class="contact-link">📧 legal@greenbasket.com.bd</a>
                <a href="tel:16234" class="contact-link">📞 16234</a>
            </div>
        </div>
    </div>
</section>


@endsection