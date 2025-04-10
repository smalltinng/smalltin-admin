<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MonthlyStats;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AdminController extends Controller
{
    // Show login page or redirect if already authenticated
    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return Inertia::render('Auth/Login', [
            'status' => session('status'),
        ]);
    }

    // Handle login request
    public function store(Request $request): RedirectResponse
    {
        if (!Auth::guard('admin')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    // Handle login with validation and feedback
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ], [
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->back()
                ->with('success', 'Login successful!');
        }

        $adminExists = Admin::where('email', $request->email)->exists();

        return back()->withErrors([
            'email' => $adminExists ? 'Invalid password' : 'No account found with this email',
        ])->onlyInput('email');
    }

    // Logout admin session
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Dashboard view
    public function dashboard()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }

        return Inertia::render('Dashboard');
    }

    // Fetch all users
    public function getAllUser()
    {
        $users = User::paginate(50);

        return response()->json([
            'message' => 'Users fetched successfully',
            'users' => $users,
        ]);
    }

    // Get authenticated admin details and settings
    public function getAdminDetails()
    {
        try {

            $admin = Auth::guard('admin')->user();

            if (!$admin) {
                return response()->json(['error' => 'Admin not found'], 404);
            }

            // Total users
            $total_users = User::count();


            $total_winners = 0; // Replace `is_winner` with actual logic

            // Monthly payout calculation (adjust if MonthlyStats has an amount field)
            $currentMonth = now()->format('Y-m');

            $monthlyStats = MonthlyStats::where('month', $currentMonth)->get();

            // Cap each record at 10,000 before summing
            $monthlyJobs = $monthlyStats->sum(function ($stat) {
                return min($stat->monthly_jobs, 10000);
            });

            $approximate_payout = $monthlyJobs;

            $setting = [
                "total_users" => $total_users,
                "approximate_payout" => $approximate_payout,
                "total_winners" => $total_winners
            ];

            $adminDetails = Admin::find($admin->id);

            return response()->json([
                'admin' => $adminDetails,
                'settings' => $setting,
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return response()->json(['error' => 'An error occurred while fetching admin details'], 500);
        }
    }

    // Create a new admin
    public function adminStore(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8|confirmed',
        ]);

        $admin = Admin::create([
            'fullname' => $validated['fullname'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.dashboard')->with([
            'success' => 'Admin created successfully',
            'admin' => $admin,
        ]);
    }

    // Show admin edit form
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    // Update admin details
    public function adminUpdate(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        $admin->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password']
                ? Hash::make($validated['password'])
                : $admin->password,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Admin updated successfully');
    }

    // Delete an admin
    public function admindestroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Admin deleted successfully');
    }

    // Show Privacy Policy page
    public function privacyPolicy()
    {
        return Inertia::render('PrivatePolicy');
    }
}