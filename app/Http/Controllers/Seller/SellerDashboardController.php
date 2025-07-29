<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;

class SellerDashboardController extends Controller
{
    public function index()
    {
        $seller = Auth::guard('seller')->user();
        $sellerId = Auth::guard('seller')->id();

        $totalProducts = Product::where('seller_id', $sellerId)->count();

        $products = $seller->products()->latest()->get();

        // Example dummy data if you don’t yet have Order model or relations
        $totalOrders = 0;
        $totalRevenue = 0;
        $averageRating = round(
            Review::whereIn(
                'product_id',
                $seller->products()->pluck('id')
            )->avg('rating'),
            1
        );
        $recentOrders = collect(); // empty collection to avoid Blade error

        // TODO: Replace these with actual logic when orders are implemented

        return view('seller.dashboard', compact(
            'totalProducts',
            'totalOrders',
            'totalRevenue',
            'averageRating',
            'recentOrders',
            'products'
        ));
    }

    public function showAllProducts(){
        $seller = Auth::guard('seller')->user();

        $products = $seller->products()->latest()->get();

        return view('seller.products.allproducts', compact('products') );
    }
}
