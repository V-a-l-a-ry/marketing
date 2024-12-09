<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureTwoFactorIsVerified
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->is_2fa_enabled && !$request->session()->has('2fa_verified')) {
            return redirect()->route('twofactor.verify');
        }

        return $next($request);
    }
}
