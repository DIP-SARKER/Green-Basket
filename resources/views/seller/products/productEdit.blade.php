@extends('index')
@push('style')
    <title>Edit Products Details | Green Basket</title>
@endpush

@section('main-content')
    <div class="edit-product-container">
        <h2>Edit Product</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('seller.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Category -->
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Name -->
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description"
                    class="form-control">{{ old('description', $product->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control"
                    value="{{ old('price', $product->price) }}">
                @error('price') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Stock Quantity -->
            <div class="form-group">
                <label for="stock_quantity">Stock Quantity</label>
                <input type="number" name="stock_quantity" id="stock_quantity" class="form-control"
                    value="{{ old('stock_quantity', $product->stock_quantity) }}">
                @error('stock_quantity') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Image URL -->
            <div class="form-group">
                <label for="image_url">Image URL</label>
                <input type="url" name="image_url" id="image_url" class="form-control"
                    value="{{ old('image_url', $product->image_url) }}">
                @error('image_url') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Submit -->
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Update Product</button>
                <a href="{{ route('sellerProfile') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection