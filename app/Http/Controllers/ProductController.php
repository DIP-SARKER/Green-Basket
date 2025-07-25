<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)
            ->latest()
            ->paginate(12);

        $categories = Category::all(); // ✅ fetch categories

        return view('consumer.shop.shop', compact('products', 'categories'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $id)
            ->where('status', 1)
            ->latest()
            ->paginate(12);

        return view('consumer.shop.shop', compact('products', 'categories', 'category'));
    }

    public function show($id)
    {
        $product = Product::with('seller')->findOrFail($id);

        // assuming you defined reviews() relation in Product model
        $reviews = $product->reviews()->with('customer')->latest()->get();

        return view('consumer.shop.show', compact('product', 'reviews'));
    }

}
