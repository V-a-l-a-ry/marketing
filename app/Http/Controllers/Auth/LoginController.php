<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        // Use the default guard unless 'admin' is required
        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->intended('/'); // Adjust the redirect as per your requirement
        }

        // If authentication fails, return back with error
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Use the default guard for logout
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login'); // Adjust the redirect for your login route
    }
}
