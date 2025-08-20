<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AuthCustomer;





class OrderController extends Controller
{


    public function index()
    {
        $orders = Order::with('category')->get(); // eager loading categories
        return view('admin.orders_management', compact('orders'));
    }

    // public function toggleActivity($id)
    // {
    //     $orders = Order::findOrFail($id);
    //     $orders->status = !$orders->status;
    //     $orders->save();
    //     return redirect()->back()->with('success', 'Product status updated successfully.');
    // }

    //

}
