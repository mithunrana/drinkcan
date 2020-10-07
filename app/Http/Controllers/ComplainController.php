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
        return redirect()->to('admin/complain-manage')->with('message','Order Successfully Submitted');
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
        $UserData->Name =  request('name');
        $UserData->Mobile =  request('mobile');
        $UserData->Comment =  request('Comment');
        $UserData->Address =  request('address');
        $UserData->checkstatus =  request('checkstatus');
        $UserData->orderstatus =  request('orderstatus');
        $UserData->save();
        return redirect()->to('admin/complain-manage')->with('message','Complain Check Successfully ...');
    }

    public function complainDelete($id){
        $Order = Complain::find($id);
        $Order->delete();
        return redirect()->to('admin/complain-manage')->with('message','Complain Delete Successfully ...');
    }
}
