@extends('index')

@section('main-content')
    <h2>Add New Product</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('seller.products.store') }}" enctype="multipart/form-data">
        @csrf

        <label>Category:</label><br>
        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required><br>
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label>Description:</label><br>
        <textarea name="description" required>{{ old('description') }}</textarea><br>
        @error('description')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label>Price:</label><br>
        <input type="number" name="price" value="{{ old('price') }}" step="0.01" required><br>
        @error('price')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label>Stock Quantity:</label><br>
        <input type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" required><br>
        @error('stock_quantity')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label>Product Image URL (optional):</label><br>
        <input type="url" name="image_url" placeholder="https://example.com/image.jpg" value="{{ old('image') }}"><br>

        @error('image')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">Add Product</button>
    </form>

    {{-- Show message --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection