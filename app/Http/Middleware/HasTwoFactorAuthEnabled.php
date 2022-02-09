<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Laravel\Fortify\TwoFactorAuthenticatable;

class HasTwoFactorAuthEnabled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    use TwoFactorAuthenticatable;

    public $two_factor_secret;

    public function __construct(Request $request)
    {
        $this->two_factor_secret = $this->getUserTwoFactorSecret($request);
    }

    public function getUserTwoFactorSecret($request)
    {
        return $request->user->two_factor_secret ?? Auth::user()->two_factor_secret;
    }

    public function handle(Request $request, Closure $next)
    {
        // if (!is_null(Auth::user()) && is_null(Auth::user()->two_factor_secret))
        if(!$this->hasEnabledTwoFactorAuthentication())
        {
            return redirect(route('user.profile.enable2fa'));
        }

        return $next($request);
    }
}
