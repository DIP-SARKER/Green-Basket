<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // adjust view path if needed
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            $admin = Auth::guard('admin')->user();
            return redirect('/admin/overview')->with('name', $admin->name);
        }

        return back()->withErrors([
            'phone' => 'Invalid credentials',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function showProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('admin'));
    }
}
