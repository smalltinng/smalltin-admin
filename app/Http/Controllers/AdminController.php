<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller



{

    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return Inertia::render('Auth/Login', [
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Attempt to authenticate the user as an admin
        if (! Auth::guard('admin')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Throw a validation exception if authentication fails
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
    
        // Regenerate the session ID to prevent session fixation
        $request->session()->regenerate();
    
        // Redirect to the intended route after login or to a default route if none
        return redirect()->intended(route('admin.dashboard'));
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    
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
            return Inertia::render('Dashboard' );
        }
    }


    public function getAllUser(){
        $users = User::paginate(50); // 50 records per page
        return response()->json(['messages' => "Users Fetch Successfully", "users" => $users]);
    }



}
