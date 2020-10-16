<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Products;
use Illuminate\Http\Request;
use App\Order;
use Mail;
use App\Mail\OrderMail;
use Maatwebsite\Excel\Facades\Excel;
class OrderController extends Controller
{

    public function orderExport(){
        return Excel::download(new OrderExport(), 'order.xlsx');
    }


    public function orderManage(){
        return view('Admin.ordermanage');
    }

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
        $Products = Products::where('id',$request->ProductId)->first();
        $incomeMailAddress = "drinkcanbd@gmail.com";
        $Name = $request->Name;
        $Mobile = $request->Mobile;
        $Address = $request->Address;
        $Model = $Products->Model;
        Mail::to($incomeMailAddress)->send(new OrderMail($Name,$Mobile,$Address,$Model));
       return redirect()->to('water-purifier-kit-price-bangladesh')->with('message','Order Successfully Submitted');
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
