<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Cart;
use App\Http\Controllers\CartController;

class CustomerAuthController extends Controller
{
    //
    public function showForm()
    {
        return view('consumer.loginsignup.customer_authentication');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'email'=> 'required|email',
            'address' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('customer')->login($customer);


        return redirect('/customer/profile')->with('name', $customer->name);

    }

    public function login(Request $request)
    {

        $credential = $request->validate([
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'password' => 'required'
        ]);

        if (Auth::guard('customer')->attempt($credential)) {
            $request->session()->regenerate();
            $customer = Auth::guard('customer')->user();
            return redirect()->intended('/customer/profile')->with('name', $customer->name);
        }

        return back()->withErrors([
            'phone' => 'Invalid Credentials'
        ]);
    }

    public function showProfile(Request $request)
{
    $customer = Auth::guard('customer')->user();
    
    $orders = $customer->orders()->orderBy('created_at', 'desc')->get();
    $cartItems = $customer->cartItems()->with('product')->get();
    $cartTotal = $cartItems->sum(function($item) {
        return $item->product ? $item->product->price * $item->quantity : 0;
    });
    
    return view('consumer.customerProfile', compact('customer', 'orders', 'cartItems', 'cartTotal'));
}


    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/register');
    }
}