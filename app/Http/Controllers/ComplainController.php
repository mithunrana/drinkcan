<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
class ComplainController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'ProductId' => 'required',
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
            'ComplainType' => 'required',
        ]);

        Complain::create([
            'ProductId' => $request->ProductId,
            'Name' => $request->Name,
            'Mobile' => $request->Mobile,
            'Address'=> $request->Address,
            'ComplainType'=> $request->ComplainType,
            'Email'=> $request->Email,
            'ComplainDetails'=> $request->ComplainDetails,
        ]);
        return redirect()->to('complaint')->with('message','Your Complain Successfully Register');
    }



    public function complainManage(){
        return view('Admin.CompalinManage');
    }

    public function complainEdit($id){
        $Order = Complain::where('id',$id)->first();
        return view('Admin.ComplaineEdit',compact('Order'));
    }

    public function complainUpdate(Request $request,$id){
        $this->validate($request,[
            'ProductId' => 'required',
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
        ]);
        $UserData = Complain::findOrFail($id);
        $UserData->Name =  request('Name');
        $UserData->Mobile =  request('Mobile');
        $UserData->Comment =  request('Comment');
        $UserData->Address =  request('Address');
        $UserData->checkstatus =  request('checkstatus');
        $UserData->ComplainDetails =  request('ComplainDetails');
        $UserData->Email =  request('Email');
        $UserData->save();
        return redirect()->to('admin/complain-manage')->with('message','Complain Check Successfully ...');
    }

    public function complainDelete($id){
        $Order = Complain::find($id);
        $Order->delete();
        return redirect()->to('admin/complain-manage')->with('message','Complain Delete Successfully ...');
    }











    public function faq(){
        return view('frontend.faq');
    }




}
