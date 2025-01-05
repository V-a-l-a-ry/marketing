<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'department' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
        ]);
    
        // Determine role based on user count
        $role = User::count() < 2 ? 'admin' : 'editor';
    
        // Handle profile image upload if provided
        $profileImagePath = null;
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('profile_images', 'public');
        }
    
        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role,
            'department' => $request->department,
            'profile_image' => $profileImagePath,
            'status' => 'Active',
            'last_active' => now(),
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    
}
