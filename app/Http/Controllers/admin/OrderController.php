<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\LoyaltyPoint;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AuthCustomer;





class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with(['customer', 'orderItems.product'])->latest()->get();
        return view('admin.orders_management', compact('orders'));
    }


    public function toggleStatus($id)
    {
        $order = Order::findOrFail($id);

        $nextStatus = match ($order->status) {
            'pending' => 'paid',
            'paid' => 'shipped',
            'shipped' => 'delivered',
            'delivered' => 'cancelled',
            'cancelled' => 'pending',
            default => 'pending',
        };

        $order->status = $nextStatus;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated.');
    }

}
