<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class TwoFactorController extends Controller
{
    /**
     * Generate and send OTP to the user's email.
     */
    public function sendOtp()
    {
        $user = Auth::user();
        $otp = random_int(100000, 999999); // Generate a 6-digit OTP

        // Save the OTP in the user's session or database
        session(['otp' => $otp]);

        // Send the OTP via email
        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your Two-Factor Authentication Code');
        });

        return view('auth.twofactor'); // Show OTP verification form
    }

    /**
     * Verify the entered OTP.
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // Check if the entered OTP matches the generated OTP
        if ($request->otp == session('otp')) {
            // Clear the OTP from the session
            session()->forget('otp');

            // Redirect to the dashboard or desired page
            return redirect()->route('dashboard')->with('success', '2FA verified successfully!');
        }

        return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
    }
}
