<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Customer;
use App\Models\Discount;
use App\Models\SupportTicket;

class AdminController extends Controller
{
    public function index()
    {
        // KPIs
        $totalRevenue = Order::sum('total_price');
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();

        $totalProducts = Product::count();
        $activeProducts = Product::where('status', 1)->count();
        $outOfStockProducts = Product::where('stock_quantity', 0)->count();

        $totalFarmers = Seller::count();
        $activeFarmers = Seller::where('status', 1)->count();

        $totalCustomers = Customer::count();
        $activeDiscounts = Discount::where('status', true)->count();

        $openTickets = SupportTicket::where('status', 'open')->count();

        // Top Selling Products (example using order_items table)
        $topProducts = \DB::table('order_items')
            ->select('product_id', \DB::raw('SUM(quantity) as total_sales'))
            ->groupBy('product_id')
            ->orderByDesc('total_sales')
            ->limit(5)
            ->get();

        $topProducts = $topProducts->map(function ($item) {
            $product = Product::find($item->product_id);
            return [
                'name' => $product->name,
                'details' => $product->description,
                'price' => $product->price,
                'sales' => $item->total_sales,
                'icon' => $product->icon ?? 'fas fa-box', // optional
            ];
        });

        // Recent Orders
        $recentOrders = Order::with('customer')
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.overview', compact(
            'totalRevenue',
            'totalOrders',
            'pendingOrders',
            'cancelledOrders',
            'totalProducts',
            'activeProducts',
            'outOfStockProducts',
            'totalFarmers',
            'activeFarmers',
            'totalCustomers',
            'activeDiscounts',
            'openTickets',
            'topProducts',
            'recentOrders'
        ));
    }
}