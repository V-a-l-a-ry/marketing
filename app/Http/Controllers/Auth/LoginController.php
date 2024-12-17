<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the credentials
        $credentials = $request->only('email', 'password');

        // Check if the user exists
        $user = User::where('email', $credentials['email'])->first();

        // Check if user exists but is inactive
        if ($user && $user->status !== 'Active') {
            return back()->withErrors([
                'email' => 'Your account is not active. Please contact the administrator.',
            ])->withInput();
        }

        // Attempt to log in the user
        if (!Auth::attempt($credentials, $request->filled('remember'))) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect. Please try again.',
            ])->withInput();
        }

        // Update the last active time after successful login
        $user->update(['last_active' => now()]);

        // Regenerate session and redirect to dashboard
        $request->session()->regenerate();
        return redirect()->intended('/'); // Redirect to a dashboard page
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
