<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Retrieve the credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to log in with the provided credentials
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate(); // Regenerate session for security
            return redirect()->intended('/dashboard'); // Adjust the redirect as per your requirement
        }

        // If authentication fails, return back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect to the login page
    }
}

