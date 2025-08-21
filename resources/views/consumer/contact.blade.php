@extends('index')

@push('style')
    <title>যোগাযোগ | গ্রিন বাস্কেট</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/styles_for_contact_us.css') }}">
@endpush

@section('main-content')
    <section class="contact-hero">
        <div class="container">
            <h1>আমাদের সাথে যোগাযোগ করুন</h1>
            <p>আমরা আপনার কথা শুনতে পেরে আনন্দিত হবো! আমাদের খামার-তাজা পণ্য সম্পর্কে প্রশ্ন থাকুক, অর্ডার সংক্রান্ত সাহায্য
                প্রয়োজন হোক,
                বা শুধুমাত্র মতামত শেয়ার করতে চান – আমাদের টিম সবসময় সাহায্যের জন্য প্রস্তুত।</p>
        </div>
    </section>

    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>যোগাযোগের তথ্য</h2>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-content">
                        <h3>আমাদের খামার</h3>
                        <p>১২৩ অর্গানিক লেন<br>ফার্মভিল, ক্যালিফোর্নিয়া ১২৩৪৫</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="info-content">
                        <h3>কল করুন</h3>
                        <p>+১ (৫৫৫) ১২৩-৪৫৬৭<br>সোম-শুক্র, সকাল ৯টা-সন্ধ্যা ৫টা (PST)</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div class="info-content">
                        <h3>ইমেইল করুন</h3>
                        <p>hello@greenbasket.com<br>সাধারণত আমরা ২৪ ঘন্টার মধ্যে উত্তর দেই</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-clock"></i></div>
                    <div class="info-content">
                        <h3>ডেলিভারি সময়</h3>
                        <p>মঙ্গলবার - শনিবার<br>সকাল ৬টা - দুপুর ২টা (তাজা ফসলের জন্য)</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>আমাদেরকে বার্তা পাঠান</h2>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    <div class="form-group">
                        <label for="customer_name">আপনার নাম</label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="জন ডো" required>
                    </div>

                    <div class="form-group">
                        <label for="email">ইমেইল ঠিকানা</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">বিষয়</label>
                        <input type="text" id="subject" name="subject" placeholder="আমরা কীভাবে সাহায্য করতে পারি?"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="message">আপনার বার্তা</label>
                        <textarea id="message" name="message" placeholder="আপনার প্রশ্ন বা মতামত লিখুন..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">বার্তা পাঠান</button>
                </form>
            </div>
        </div>
    </div>
@endsection
