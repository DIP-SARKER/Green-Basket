<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SellerController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index(Request $request)
    {
        $query = Seller::query();

        // Apply status filter
        if ($request->has('status') && $request->status !== null) {
            $query->where('status', $request->status);
        }

        $sellers = $query->paginate(3)->withQueryString();
        // Add pagination if needed

        return view('admin.farmers_management', compact('sellers'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'email' => 'nullable|email',
            'address' => 'required',
        ]);

        $seller = Seller::findOrFail($id);

        $seller->name = $request->name;
        $seller->phone = $request->phone;
        $seller->email = $request->email;
        $seller->address = $request->address;
        $seller->products = $request->products;
        $seller->status = $request->status;
        $seller->save();

        return redirect()->back()->with('success', 'Farmer updated successfully.');
    }



    public function delete($id)
    {
        $seller = Seller::findOrFail($id);
        $seller->delete();
        return redirect()->back()->with('success', 'Farmer deleted successfully.');
    }

}