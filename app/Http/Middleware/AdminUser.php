<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Auth;
class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        elseif(Auth::check()){
            $user = auth()->user();
            if(Auth::user()->activestatus =='TechHelpInfoAdmin'){
                if(auth()->check() && $user->two_factor_code)
                {
                    $CurrentTime = Carbon::now()->format('Y-m-d H:i:s');
                    if($CurrentTime>$user->two_factor_expires_at)
                    {
                        app('App\Http\Controllers\Auth\TwoStepVerificationController')->resetVerification();
                        auth()->logout();
                        return redirect()->route('login')->withMessage('The two factor code has expired. Please login again.');
                    }
                    else{
                        return redirect('two-factor-verification')->with('message','Please Check your mail for two factor verification code');
                    }
                }else{
                    return $next($request);
                }
            }else{
                return redirect('user-panel');
            }
        }
    }
}
