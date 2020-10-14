<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteProfile;
use Session;
use Mail;
use App\Mail\ContactUserIncomingMail;
USE App\Mail\ContactUserOutGoingMail;
class ContactController extends Controller
{
    public function index(){
        $SiteProfile = SiteProfile::first();
        return view('frontend.contact',compact('SiteProfile'));
    }

    public function sendMail(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
            'name' => 'required',
            'usermessage' => 'required',
            'enquiry_type' => 'required',
        ]);
        $email = $request->email;
        $address = $request->address;
        $phone_no = $request->phone_no;
        $usermessage = $request->usermessage;
        $enquiry_type = $request->enquiry_type;
        $name = $request->name;
        $incomeMailAddress = "drinkcanbd@gmail.com";
        Mail::to($email)->send(new ContactUserOutGoingMail($name));
        Mail::to($incomeMailAddress)->send(new ContactUserIncomingMail($email,$address,$phone_no,$usermessage,$enquiry_type,$name));
        Session::flash("success");
        return redirect()->to('contact');
    }

}
