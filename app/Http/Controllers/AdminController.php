<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            "email" => "email|required",
            "password" => "string|required"
        ]);

        if (Auth::guard('admin')->attempt(['email' => $cred['email'], 'password' => $cred['password']])) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        } else {
            return view('admin.dashboard');
        }
    }
}
