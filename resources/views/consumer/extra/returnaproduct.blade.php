@extends('index')
@push('style')
<title>প্রোডাক্ট রিটার্ন করুন | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/returnaproduct.css') }}">
@endpush

@section('main-content')
<section class="returns-section">
    <div class="container">
        <h1 class="section-title">রিটার্ন ও রিফান্ড</h1>
        
        <div class="returns-policy">
            <h2>আমাদের রিটার্ন পলিসি</h2>
            <p class="policy-intro">Green Basket-এ আমরা তাজা ফার্ম পণ্যের গুণগত মানে গর্ব করি। আপনি যদি সম্পূর্ণ সন্তুষ্ট না হন, তাহলে আমাদের রিটার্ন নীতি এখানে:</p>
            
            <div class="policy-grid">
                <div class="policy-card">
                    <div class="policy-icon">✅</div>
                    <h3>কি রিটার্ন করা যায়</h3>
                    <ul>
                        <li>ক্ষতিগ্রস্ত বা নষ্ট পণ্য (ডেলিভারির ২৪ ঘণ্টার মধ্যে)</li>
                        <li>ভুল আইটেম প্রাপ্ত</li>
                        <li>আনপ্যাকেজড পণ্য (৩ দিনের মধ্যে)</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">❌</div>
                    <h3>কি রিটার্ন করা যায় না</h3>
                    <ul>
                        <li>যে পণ্যগুলো খোলা বা আংশিক ব্যবহৃত হয়েছে</li>
                        <li>ডেলিভারির পরে সঠিকভাবে সংরক্ষণ না করার কারণে ক্ষতিগ্রস্ত পণ্য</li>
                        <li>মনের পরিবর্তনের কারণে তাজা পণ্য রিটার্ন</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">⏱️</div>
                    <h3>রিটার্ন সময়সীমা</h3>
                    <ul>
                        <li><strong>তাজা পণ্য:</strong> ২৪ ঘণ্টার মধ্যে রিপোর্ট করুন</li>
                        <li><strong>প্যাকেজড পণ্য:</strong> ডেলিভারির ৩ দিনের মধ্যে</li>
                        <li><strong>ডেইরি/মাংস:</strong> ডেলিভারির সাথে সাথে রিপোর্ট করুন</li>
                    </ul>
                </div>
                
                <div class="policy-card">
                    <div class="policy-icon">💸</div>
                    <h3>রিফান্ড প্রসেস</h3>
                    <ul>
                        <li>রিফান্ড প্রক্রিয়াজাত ৩ কার্যদিবসের মধ্যে</li>
                        <li>মূল পেমেন্ট পদ্ধতিতে ক্রেডিট করা হবে</li>
                        <li>ডিজিটাল পেমেন্ট ৭-১০ কার্যদিবসের মধ্যে ফেরত</li>
                    </ul>
                </div>
            </div>
            
            <div class="policy-notes">
                <div class="note-card important">
                    <h4>গুরুত্বপূর্ণ নোট:</h4>
                    <p>পেরিশেবল আইটেমের জন্য, দয়া করে রিটার্ন রিকোয়েস্ট জমা দেওয়ার সময় ক্ষতিগ্রস্ত পণ্যের স্পষ্ট ছবি প্রদান করুন। এটি আমাদের গুণমান নিয়ন্ত্রণ উন্নত করতে সাহায্য করে।</p>
                </div>
                
                <div class="note-card">
                    <h4>গুণমানের নিশ্চয়তা:</h4>
                    <p>আমরা আমাদের ফার্ম-ফ্রেশ পণ্যের গুণমানের প্রতি দায়বদ্ধ। যদি আপনি নিম্নমানের পণ্য পান, আমরা শুধুমাত্র রিফান্ড দেব না বরং আপনার পরবর্তী অর্ডারে ডিসকাউন্টও দেব।</p>
                </div>
            </div>
        </div>
        
        <div class="return-request">
            <h2>রিটার্ন রিকোয়েস্ট জমা দিন</h2>
            <p class="form-intro">রিটার্ন অনুরোধ করতে নিচের ফর্ম পূরণ করুন। আমরা ২৪ ঘণ্টার মধ্যে উত্তর দেব।</p>
            
            <form id="returnForm" class="return-form">
                <div class="form-group">
                    <label for="orderNumber">অর্ডার নাম্বার*</label>
                    <input type="text" id="orderNumber" name="orderNumber" required placeholder="যেমন: GB-123456">
                </div>
                
                <div class="form-group">
                    <label for="orderDate">অর্ডারের তারিখ*</label>
                    <input type="date" id="orderDate" name="orderDate" required>
                </div>
                
                <div class="form-group">
                    <label for="returnReason">রিটার্নের কারণ*</label>
                    <select id="returnReason" name="returnReason" required>
                        <option value="">একটি কারণ নির্বাচন করুন</option>
                        <option value="damaged">ক্ষতিগ্রস্ত পণ্য</option>
                        <option value="spoiled">নষ্ট/মেয়াদ শেষ</option>
                        <option value="wrong">ভুল আইটেম প্রাপ্ত</option>
                        <option value="other">অন্যান্য</option>
                    </select>
                </div>
                
                <div class="form-group" id="productDetailsGroup">
                    <label>রিটার্ন করতে চান এমন পণ্য*</label>
                    <div id="productContainer">
                        <div class="product-row">
                            <input type="text" name="productName[]" placeholder="পণ্যের নাম" required>
                            <input type="number" name="productQty[]" placeholder="পরিমাণ" min="1" required>
                            <select name="productReason[]" required>
                                <option value="">কারণ</option>
                                <option value="damaged">ক্ষতিগ্রস্ত</option>
                                <option value="spoiled">নষ্ট</option>
                                <option value="wrong">ভুল আইটেম</option>
                            </select>
                            <button type="button" class="remove-product" style="display: none;">×</button>
                        </div>
                    </div>
                    <button type="button" id="addProduct" class="add-button">+ আরও একটি পণ্য যোগ করুন</button>
                </div>
                
                <div class="form-group">
                    <label for="returnDetails">অতিরিক্ত তথ্য</label>
                    <textarea id="returnDetails" name="returnDetails" placeholder="রিটার্ন সংক্রান্ত অতিরিক্ত তথ্য প্রদান করুন..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="photoUpload">ছবি আপলোড করুন (প্রতি ৩MB পর্যন্ত)</label>
                    <input type="file" id="photoUpload" name="photoUpload" accept="image/*" multiple>
                    <small>পেরিশেবল আইটেমের জন্য ছবি প্রয়োজন</small>
                </div>
                
                <div class="form-group">
                    <label for="contactMethod">প্রিয় যোগাযোগ পদ্ধতি*</label>
                    <div class="radio-group">
                        <label><input type="radio" name="contactMethod" value="email" checked> ইমেইল</label>
                        <label><input type="radio" name="contactMethod" value="phone"> ফোন</label>
                        <label><input type="radio" name="contactMethod" value="whatsapp"> WhatsApp</label>
                    </div>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="cta-button">রিটার্ন রিকোয়েস্ট জমা দিন</button>
                </div>
            </form>
        </div>
        
        <div class="returns-contact">
            <h3>আপনার রিটার্নে তাত্ক্ষণিক সাহায্যের প্রয়োজন?</h3>
            <p>আমাদের কাস্টমার কেয়ার টিম প্রতিদিন সকাল ৮টা থেকে রাত ১০টা পর্যন্ত উপলব্ধ।</p>
            <div class="contact-methods">
                <a href="tel:16234" class="contact-link">
                    <span class="contact-icon">📞</span>
                    <span>কল করুন: 16234</span>
                </a>
                <a href="mailto:returns@greenbasket.com" class="contact-link">
                    <span class="contact-icon">✉️</span>
                    <span>ইমেইল করুন</span>
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
