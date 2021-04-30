<?php

namespace App\Http\Controllers\Auth;

use App\BlogTutorial;
use App\Course;
use App\Service;
use App\SiteProfile;
use App\Software;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Mail;
use Auth;
use Carbon\Carbon;
use App\Mail\TwoFectorAuthMail;
class TwoStepVerificationController extends Controller
{

    
    public function verification(){
        if (!Auth::check()) {
            return redirect('login');
        }elseif(Auth::check()){
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
                        $SiteProfile = SiteProfile::first();
                        return view('Admin/two-step-verification',compact('SiteProfile'));
                    }
                }else{
                    return redirect('admin/admin-panel');
                }
            }else{
                return redirect('user-panel');
            }
        }

    }


    public function verificationCheck(Request $request){
        $request->validate([
            'two_factor_code' => 'integer|required|min:6',
        ]);
        $user = auth()->user();
        $CurrentTime = Carbon::now()->format('Y-m-d H:i:s');
        if($CurrentTime>$user->two_factor_expires_at)
        {
            app('App\Http\Controllers\Auth\TwoStepVerificationController')->resetVerification();
            auth()->logout();
            return redirect()->route('login')->withMessage('The two factor code has expired. Please login again.');
        }else{
            if($request->input('two_factor_code') == $user->two_factor_code)
            {
                $user->two_factor_code="";
                $user->two_factor_expires_at = "";
                $user->save();
                return redirect()->route('login');
            }else{
                return redirect()->back()->with('message','The two factor code you have entered does not match');
            }
        }
    }



    public function resetVerification(){
        $user = auth()->user();
        $user->two_factor_code="";
        $user->two_factor_expires_at = "";
        $user->save();
    }


    public function verificationCodeSend(){
        $user = auth()->user();
        $Code =  rand(100000, 999999);
        $user->two_factor_code = $Code;
        $user->two_factor_expires_at = now()->addMinutes(10);
        $user->save();

        $email = $user->email;

        Mail::to($email)->send(new TwoFectorAuthMail($Code));
        return redirect('two-factor-verification')->with('message','Please Check your mail for two factor verification code');
    }


}
