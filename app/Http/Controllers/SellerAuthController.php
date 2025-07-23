<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerAuthController extends Controller
{
    //
    public function showForm(){
        return view("seller.auth.sellerAuth");
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'email'=> 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        $seller = Seller::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::login($seller);

        return redirect("/sellerProfile")->with('name',$seller->name);
        
    }
    public function login(Request $request)
    {

        $credential = $request->validate([
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'password' => 'required'
        ]);

        if (Auth::guard('seller')->attempt($credential)) {
            $request->session()->regenerate();
            $seller = Auth::guard('seller')->user();
            // dd($seller); 
            return redirect("/sellerProfile")->with('name',$seller->name);
        }

        return back()->withErrors([
            'phone' => 'Invalid Credentials'
        ]);
    }

        public function logout(Request $request){
        Auth::guard('seller')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sellerregister');
    }
}
