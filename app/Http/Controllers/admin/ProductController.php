<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index()
    {
        $products = Product::with('category')->get(); // eager loading categories
        return view('admin.products_management', compact('products'));
    }

    public function toggleActivity($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();
        return redirect()->back()->with('success', 'Product status updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

}