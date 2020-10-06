<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{

    public function order(Request $request){
        $this->validate($request,[
            'ProductId' => 'required',
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
        ]);

        Order::create([
            'ProductId' => $request->ProductId,
            'Name' => $request->Name,
            'Mobile' => $request->Mobile,
            'Address'=> $request->Address,
        ]);
       return redirect()->to('water-purifier-kit-price')->with('message','Order Successfully Submitted');
    }








    public function orderManage(){
        return view('Admin.ordermanage');
    }

    public function orderEdit($id){
        $Order = Order::where('id',$id)->first();
        return view('Admin.order-edit',compact('Order'));
    }

    public function orderUpdate(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);
        $UserData = Order::findOrFail($id);
        $UserData->Name =  request('name');
        $UserData->Mobile =  request('mobile');
        $UserData->Comment =  request('Comment');
        $UserData->Address =  request('address');
        $UserData->checkstatus =  request('checkstatus');
        $UserData->orderstatus =  request('orderstatus');
        $UserData->save();
        return redirect()->to('admin/order-manage')->with('message','Order Check Successfully ...');
    }

    public function orderDelete($id){
        $Order = Order::find($id);
        $Order->delete();
        return redirect()->to('admin/order-manage')->with('message','Order Delete Successfully ...');
    }

}
