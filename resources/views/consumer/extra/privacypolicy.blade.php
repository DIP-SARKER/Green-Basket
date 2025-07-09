@extends('index')
@push('style')
<title>Privacy Policy | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/sakib/privacypolicy.css') }}">
@endpush

@section('main-content')
<div class="privacy-policy">
    <div class="container">
        <h1 class="policy-title">Privacy Policy</h1>
        <p class="policy-update">Last Updated: <span id="current-date"></span></p>

        <div class="policy-intro">
            <p>At <strong>Green Basket</strong>, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your data when you use our services.</p>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">1</span>Information We Collect</h2>
            <div class="subsection">
                <h3>A. Personal Information You Provide</h3>
                <ul>
                    <li>Name</li>
                    <li>Contact details (email, phone number, address)</li>
                    <li>Payment information (bKash/Nagad/Rocket/card details)</li>
                    <li>Account credentials</li>
                    <li>Order history and preferences</li>
                </ul>
            </div>
            <div class="subsection">
                <h3>B. Automatically Collected Data</h3>
                <ul>
                    <li><strong>Device Information:</strong> IP address, browser type, operating system</li>
                    <li><strong>Usage Data:</strong> Pages visited, time spent, clicks</li>
                    <li><strong>Cookies & Tracking:</strong> We use cookies to improve your experience</li>
                </ul>
            </div>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">2</span>How We Use Your Information</h2>
            <ul class="usage-list">
                <li>Process and deliver your orders</li>
                <li>Improve our services and user experience</li>
                <li>Communicate with you (order updates, promotions)</li>
                <li>Prevent fraud and ensure security</li>
                <li>Comply with Bangladeshi laws</li>
            </ul>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">3</span>Data Sharing & Disclosure</h2>
            <p>We <strong>do not sell</strong> your personal data. We may share it only in these cases:</p>
            <div class="disclosure-grid">
                <div class="disclosure-item">
                    <div class="disclosure-icon">👨‍🌾</div>
                    <p>With <strong>farmers/suppliers</strong> (only for order fulfillment)</p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">🚚</div>
                    <p>With <strong>delivery partners</strong></p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">💳</div>
                    <p>With <strong>payment processors</strong></p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">⚖️</div>
                    <p>For <strong>legal requirements</strong></p>
                </div>
            </div>
        </div>

        <div class="policy-section security-section">
            <h2 class="section-heading"><span class="section-icon">4</span>Data Security</h2>
            <div class="security-measures">
                <div class="measure">
                    <div class="measure-icon">🔒</div>
                    <p><strong>SSL encryption</strong> for all transactions</p>
                </div>
                <div class="measure">
                    <div class="measure-icon">🛡️</div>
                    <p><strong>Secure servers</strong> with restricted access</p>
                </div>
                <div class="measure">
                    <div class="measure-icon">🔍</div>
                    <p><strong>Regular security audits</strong></p>
                </div>
            </div>
            <p class="security-note">Note: No online platform is 100% secure—always protect your login details.</p>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">5</span>Your Rights</h2>
            <div class="rights-grid">
                <div class="right-item">
                    <h3>Access & Update</h3>
                    <p>View or modify your account data anytime</p>
                </div>
                <div class="right-item">
                    <h3>Opt Out</h3>
                    <p>Unsubscribe from marketing emails</p>
                </div>
                <div class="right-item">
                    <h3>Data Removal</h3>
                    <p>Request deletion of your information</p>
                </div>
            </div>
        </div>

        <div class="policy-contact">
            <h2>Contact Us</h2>
            <p>For privacy-related questions:</p>
            <div class="contact-methods">
                <a href="mailto:privacy@greenbasket.com.bd" class="contact-link">📧 privacy@greenbasket.com.bd</a>
                <a href="tel:16234" class="contact-link">📞 16234</a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js\hridoy\termscondition-privacy.js') }}"></script>

@endsection