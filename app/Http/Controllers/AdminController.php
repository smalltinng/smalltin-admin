<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Log;
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



     public function privacyPolicy(){
        return Inertia::render('PrivatePolicy');
     }
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


    public function getAdminDetails()
{
    try {
        // Assuming you're using an 'admin' guard
        $admin = Auth::guard('admin')->user();
        
        if (!$admin) {
            return response()->json(['error' => 'Admin not found'], 404);
        }

        // Assuming settings are stored as a JSON field or relation
       $setting =  Setting::first();
        $adminDetails = Admin::find($admin->id);

        return response()->json([
            'admin' => $adminDetails,
            "settings"=>$setting
        ], 200);
    } catch (\Exception $e) {
        // Log the error
        Log::error($e->getMessage());

        return response()->json(['error' => 'An error occurred while fetching admin details'], 500);
    }
}




public function adminStore(Request $request)
{
    $validated = $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
        'username' => 'required|min:8|confirmed',
    ]);

    // Create new admin
    $admin = Admin::create([
        'fullname' => $validated['fullname'],
        'username' => $validated['fullname'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    return redirect()->route('admin.index')->with('success', 'Admin created successfully');
}

/**
 * Show the form for editing the specified admin.
 */
public function edit($id)
{
    $admin = Admin::findOrFail($id);

    return view('admin.edit', compact('admin'));
}

/**
 * Update the specified admin in storage.
 */
public function adminUpdate(Request $request, $id)
{
    $admin = Admin::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $admin->id,
        'password' => 'nullable|min:8|confirmed',
    ]);

    // Update admin
    $admin->update([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password'] ? Hash::make($validated['password']) : $admin->password,
    ]);

    return redirect()->route('admin.index')->with('success', 'Admin updated successfully');
}

/**
 * Remove the specified admin from storage.
 */
public function admindestroy($id)
{
    $admin = Admin::findOrFail($id);

    $admin->delete();

    return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
}


}
