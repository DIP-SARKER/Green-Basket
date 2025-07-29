<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CustomerController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index()
    {
        $customers = Customer::all();


        // $avgProducts = $customers->avg('products');

        return view('admin.customers_management', compact(
            'customers',
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'email' => 'nullable|email',
            'address' => 'required|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);

        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Customer updated successfully.',
                'customer' => $customer
            ]);
        }

        return redirect()->back()->with('success', 'Customer updated successfully.');
    }



}