@extends('index')
@push('style')
<title>Return A Product | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/returnaproduct.css') }}">
@endpush

@section('main-content')
<section class="returns-section">
    <div class="container">
        <h1 class="section-title">Returns & Refunds</h1>
        
        <div class="returns-policy">
            <h2>Our Return Policy</h2>
            <p class="policy-intro">At Green Basket, we take pride in delivering the freshest farm products. If you're not completely satisfied, here's our return policy:</p>
            
            <div class="policy-grid">
                <div class="policy-card">
                    <div class="policy-icon">✅</div>
                    <h3>What Can Be Returned</h3>
                    <ul>
                        <li>Damaged or spoiled products (within 24 hours of delivery)</li>
                        <li>Incorrect items received</li>
                        <li>Unopened packaged goods (within 3 days)</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">❌</div>
                    <h3>What Can't Be Returned</h3>
                    <ul>
                        <li>Perishable items that have been opened or partially used</li>
                        <li>Products damaged due to improper storage after delivery</li>
                        <li>Change of mind for fresh produce</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">⏱️</div>
                    <h3>Return Timeframe</h3>
                    <ul>
                        <li><strong>Fresh produce:</strong> Report within 24 hours</li>
                        <li><strong>Packaged goods:</strong> Within 3 days of delivery</li>
                        <li><strong>Dairy/Meat:</strong> Report immediately upon delivery</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">💸</div>
                    <h3>Refund Process</h3>
                    <ul>
                        <li>Refunds processed within 3 business days</li>
                        <li>Original payment method will be credited</li>
                        <li>Digital payments refunded in 7-10 business days</li>
                    </ul>
                </div>
            </div>
            
            <div class="policy-notes">
                <div class="note-card important">
                    <h4>Important Note:</h4>
                    <p>For perishable items, please provide clear photos of the damaged products when submitting your return request. This helps us improve our quality control and serve you better.</p>
                </div>
                
                <div class="note-card">
                    <h4>Quality Guarantee:</h4>
                    <p>We stand by the quality of our farm-fresh products. If you receive substandard items, we'll not only refund you but also offer a discount on your next order.</p>
                </div>
            </div>
        </div>
        
        <div class="return-request">
            <h2>Submit a Return Request</h2>
            <p class="form-intro">Please fill out the form below to request a return. We'll respond within 24 hours.</p>
            
            <form id="returnForm" class="return-form">
                <div class="form-group">
                    <label for="orderNumber">Order Number*</label>
                    <input type="text" id="orderNumber" name="orderNumber" required placeholder="e.g. GB-123456">
                </div>
                
                <div class="form-group">
                    <label for="orderDate">Order Date*</label>
                    <input type="date" id="orderDate" name="orderDate" required>
                </div>
                
                <div class="form-group">
                    <label for="returnReason">Reason for Return*</label>
                    <select id="returnReason" name="returnReason" required>
                        <option value="">Select a reason</option>
                        <option value="damaged">Damaged Product</option>
                        <option value="spoiled">Spoiled/Expired</option>
                        <option value="wrong">Wrong Item Received</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group" id="productDetailsGroup">
                    <label>Products to Return*</label>
                    <div id="productContainer">
                        <div class="product-row">
                            <input type="text" name="productName[]" placeholder="Product name" required>
                            <input type="number" name="productQty[]" placeholder="Qty" min="1" required>
                            <select name="productReason[]" required>
                                <option value="">Reason</option>
                                <option value="damaged">Damaged</option>
                                <option value="spoiled">Spoiled</option>
                                <option value="wrong">Wrong Item</option>
                            </select>
                            <button type="button" class="remove-product" style="display: none;">×</button>
                        </div>
                    </div>
                    <button type="button" id="addProduct" class="add-button">+ Add Another Product</button>
                </div>
                
                <div class="form-group">
                    <label for="returnDetails">Additional Details</label>
                    <textarea id="returnDetails" name="returnDetails" placeholder="Please provide any additional information about your return..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="photoUpload">Upload Photos (Max 3MB each)</label>
                    <input type="file" id="photoUpload" name="photoUpload" accept="image/*" multiple>
                    <small>For perishable items, photos are required</small>
                </div>
                
                <div class="form-group">
                    <label for="contactMethod">Preferred Contact Method*</label>
                    <div class="radio-group">
                        <label><input type="radio" name="contactMethod" value="email" checked> Email</label>
                        <label><input type="radio" name="contactMethod" value="phone"> Phone</label>
                        <label><input type="radio" name="contactMethod" value="whatsapp"> WhatsApp</label>
                    </div>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="cta-button">Submit Return Request</button>
                </div>
            </form>
        </div>
        
        <div class="returns-contact">
            <h3>Need immediate assistance with your return?</h3>
            <p>Our customer care team is available from 8AM to 10PM daily.</p>
            <div class="contact-methods">
                <a href="tel:16234" class="contact-link">
                    <span class="contact-icon">📞</span>
                    <span>Call: 16234</span>
                </a>
                <a href="mailto:returns@greenbasket.com" class="contact-link">
                    <span class="contact-icon">✉️</span>
                    <span>Email Us</span>
                </a>
                <a href="https://wa.me/8801712345678" class="contact-link">
                    <span class="contact-icon">💬</span>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/hridoy/return-product.js') }}"></script>
@endsection