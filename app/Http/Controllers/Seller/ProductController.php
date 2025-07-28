<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:seller');
    }
    public function create()
    {

        $categories = Category::all();
        return view("seller.products.create", compact("categories"));
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer|min:0',
            'image_url' => 'url',
        ]);

        $imagePath = $request->image_url; // URL from form input

        Product::create([
            'seller_id' => Auth::guard('seller')->id(),
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'image_url' => $imagePath,
            'status' => true,
        ]);

        return redirect()->route('seller.products.create')->with('success', 'Product added successfully.');
    }

    public function edit($id)
    {
        $product = Product::where('seller_id', Auth::guard('seller')->id())->findOrFail($id);
        $categories = Category::all();

        return view('seller.products.productEdit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::where('seller_id', Auth::guard('seller')->id())->findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer|min:0',
            'image_url' => 'url',
        ]);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('sellerProfile')->with('success', 'Product Updated Successfully!');
    }

    public function destroy($id)
    {
        $product = Product::where('seller_id', Auth::guard('seller')->id())->findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted Successfully!');
    }

}
