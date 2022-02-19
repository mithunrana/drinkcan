<?php

namespace App\Http\Controllers;

use App\HomeDemo;
use Illuminate\Http\Request;
use Mail;
use App\Mail\HomeDemoIncomingMail;
class HomeDemoController extends Controller
{
    public function manage(){
        return view('Admin.homedemomanage');
    }

    public function order(Request $request){
        $this->validate($request,[
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
        ]);

        HomeDemo::create([
            'Name' => $request->Name,
            'Mobile' => $request->Mobile,
            'Address'=> $request->Address,
            'Email'=> $request->Email,
        ]);
        $incomeMailAddress = "drinkcanbd@gmail.com";
        $Name = $request->Name;
        $Mobile = $request->Mobile;
        $Address = $request->Address;
        $Email = $request->Email;
        Mail::to($incomeMailAddress)->send(new HomeDemoIncomingMail($Name,$Mobile,$Address,$Email));
        return redirect()->back()->with('demo-message','Free Home Demo Order Successfully Submitted');
    }

    public function demoEdit($id){
        $Demo = HomeDemo::where('id',$id)->first();
        return view('Admin.homedemoedit',compact('Demo'));
    }

    public function demoUpdate(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);
        $UserData = HomeDemo::findOrFail($id);
        $UserData->Name =  request('name');
        $UserData->Mobile =  request('mobile');
        $UserData->Comment =  request('Comment');
        $UserData->Email =  request('Email');
        $UserData->Address =  request('address');
        $UserData->checkstatus =  request('checkstatus');
        $UserData->orderstatus =  request('orderstatus');
        $UserData->save();
        return redirect()->to('admin/homedemo-manage')->with('message','Home Demo Order Check Successfully ...');
    }

    public function demoDelete($id){
        $Order = HomeDemo::find($id);
        $Order->delete();
        return redirect()->to('admin/homedemo-manage')->with('message','Home Demo Order Delete Successfully ...');
    }

}
