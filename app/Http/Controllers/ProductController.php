<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('seller')
            ->where('status', 1);

        // ✅ Search filter
        if ($request->filled('q')) {
            $search = $request->q;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhereHas('seller', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $products = $query->latest()->paginate(12);

        $categories = Category::all();

        return view('consumer.shop.shop', compact('products', 'categories'))
            ->with('search', $request->q); // so blade can use it
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
