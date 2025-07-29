<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;





class OrderController extends Controller
{

    public function index()
    {
        $customer = Auth::guard('customer')->user();
        $orders = Order::with('orderItems.product')->where('customer_id', $customer->id)->latest()->get();

        return view('consumer.orders.index', compact('orders'));
    }

    //
    public function checkout(Request $request)
    {
        $customer = Auth::guard("customer")->user();
        $cartItems = Cart::with("product")->where("customer_id", $customer->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with("error", "Your cart is empty!");
        }

        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }

        DB::beginTransaction();
        try {
            $order = Order::create([
                "customer_id" => $customer->id,
                "total_price" => $total,
                "status" => 'pending',
            ]);

            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product->id,
                    'quantity' => $item->quantity,
                    'price_at_purchase' => $item->product->price,
                ]);

                $item->product->decrement('stock_quantity', $item->quantity);
            }

            Cart::where('customer_id', $customer->id)->delete();


            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Order Placed Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Checkout failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Checkout failed. Please try again.');
        }

    }

    public function show($id)
    {
        $customer = Auth::guard('customer')->user();

        $order = Order::with('orderItems.product')
            ->where('id', $id)
            ->where('customer_id', $customer->id)
            ->firstOrFail();

        return view('consumer.orders.show', compact('order'));
    }

}
