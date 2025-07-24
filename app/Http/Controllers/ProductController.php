<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
}
