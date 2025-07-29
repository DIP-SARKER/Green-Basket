@extends('seller.seller-index')
@push('style')
<title>Add Product | GreenBasket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/seller/create.css') }}">
@endpush

@section('main-content')
    <div class="product-form-container">
        <h2 class="form-title">Add New Product</h2>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <form class="product-form" method="POST" action="{{ route('seller.products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-label">Category:</label>
                <select class="form-select" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Name:</label>
                <input class="form-input" type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Description:</label>
                <textarea class="form-textarea" name="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Price:</label>
                <input class="form-input" type="number" name="price" value="{{ old('price') }}" step="0.01" required>
                @error('price')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Stock Quantity:</label>
                <input class="form-input" type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" required>
                @error('stock_quantity')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Product Image URL (optional):</label>
                <input class="form-input" type="url" name="image_url" placeholder="https://example.com/image.jpg" value="{{ old('image') }}">
                @error('image')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <button class="submit-button" type="submit">Add Product</button>
        </form>

        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection