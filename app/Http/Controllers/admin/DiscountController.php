<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
// 🔹 Show all discounts
    public function index()
    {
        $discounts = Discount::orderBy('created_at', 'desc')->get();
        return view('admin.discounts', compact('discounts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:20|unique:discounts,code',
            'name' => 'required|string|max:50',
            'discount_type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'usage_limit' => 'nullable|numeric|min:1',
            'status' => 'required|boolean'
        ]);

        Discount::create($validated);

        return redirect()->back()->with('success', 'Discount created successfully!');
    }

    public function update(Request $request, $id)
    {
        $discount = Discount::findOrFail($id);

        $validated = $request->validate([
            'code' => 'required|string|max:20|unique:discounts,code,' . $id,
            'name' => 'required|string|max:50',
            'discount_type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'usage_limit' => 'nullable|numeric|min:1',
            'status' => 'required|boolean'
        ]);

        try {
            $discount->update($validated);
            return redirect()->back()->with('success', 'Discount updated successfully!');
        } catch (\Throwable $e) {
            return redirect()->back()
                ->withErrors(['error' => $e->getMessage()])
                ->withInput();
        }
    }


    public function destroy($id)
    {
        Discount::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Discount deleted successfully!');
    }


}