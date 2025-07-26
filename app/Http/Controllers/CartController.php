<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function showCart()
    {
        $customer = Auth::guard("customer")->user();
        $cartItems = Cart::with("product")->where("customer_id", $customer->id)->get();

        return view("consumer.cart.index", compact("cartItems"));
    }

    public function addToCart(Request $request, $id)
    {

        $customer = Auth::guard("customer")->user();
        $product = Product::findOrFail($id);
        $quantity = (int) $request->input("quantity", 1);

        if ($quantity < 1) {
            return redirect()->back()->with('error', 'Quantity must be at least 1');
        }

        if ($product->stock_quantity < $quantity) {
            return redirect()->back()->with('error', 'Only ' . $product->stock_quantity . ' in stock');
        }

        $cartItem = Cart::where('customer_id', $customer->id)->where('product_id', $id)->first();

        if ($cartItem) {
            $newQty = $cartItem->quantity + $quantity;

            if ($newQty > $product->stock_quantity) {
                return redirect()->back()->with('error', 'Total exceeds available stock!');
            }

            $cartItem->quantity = $newQty;
            $cartItem->save();
        } else {
            Cart::create([
                'customer_id' => $customer->id,
                'product_id' => $id,
                'quantity' => $quantity,
            ]);
        }
        return redirect()->route('cart.index')->with('success', 'Product added to Cart!');

    }

    public function removeFromCart($id)
    {
        $customer = Auth::guard('customer')->user();

        Cart::where('customer_id', $customer->id)
            ->where('product_id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
}
