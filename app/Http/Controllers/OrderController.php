<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AuthCustomer;





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

        $selectedCartItemIds = $request->input('selected_items', []); // from checkbox inputs

        if (empty($selectedCartItemIds)) {
            return redirect()->back()->with("error", "No items selected for checkout.");
        }

        $cartItems = Cart::with("product")
            ->where("customer_id", $customer->id)
            ->whereIn("id", $selectedCartItemIds)
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with("error", "No valid cart items found.");
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

            // Only delete selected items
            Cart::whereIn('id', $selectedCartItemIds)->delete();

            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
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
