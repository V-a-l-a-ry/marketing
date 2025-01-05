<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find the user by ID or throw a 404
        $user->delete(); // Delete the user

        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
