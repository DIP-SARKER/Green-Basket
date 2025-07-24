<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {

        $products = Product::where('status', 1)->latest()->paginate(12);
        return view('consumer.shop.shop', compact('products'));
    }


}
