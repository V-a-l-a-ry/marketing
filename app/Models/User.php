<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PragmaRX\Google2FA\Google2FA;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'google2fa_secret', 
        'is_2fa_enabled',
    ];

    /**
     * Generate Google2FA secret key.
     *
     * @return void
     */
    public function generateGoogle2FASecret(): void
    {
        $google2fa = new Google2FA();
        $this->google2fa_secret = $google2fa->generateSecretKey();
        $this->save();
    }

    /**
     * Verify the provided Google2FA token.
     *
     * @param string $token
     * @return bool
     */
    public function verifyGoogle2FAToken(string $token): bool
    {
        $google2fa = new Google2FA();
        return $google2fa->verifyKey($this->google2fa_secret, $token);
    }
}
