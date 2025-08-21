<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        // Load staff members from the database
        $staffMembers = Admin::all();

        return view('admin.settings', compact('staffMembers'));


    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'avatar' => 'nullable',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make('password'),
            'avatar' => $request->avatar,
        ]);

        return redirect()->back()->with('success', 'Staff member added successfully!');
    }

}
