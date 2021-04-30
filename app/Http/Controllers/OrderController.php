<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Products;
use Illuminate\Http\Request;
use App\Order;
use Mail;
use App\Mail\OrderMail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;
class OrderController extends Controller
{


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
        $Type = $Products->ProductsType;
        Mail::to($incomeMailAddress)->send(new OrderMail($Name,$Mobile,$Address,$Model,$Type));
       return redirect()->back()->with('message','Order Successfully Submitted');
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




    public function orderExport(Request $request){
        $from = "";
        $to="";
        if($request->startdate !=null && $request->enddate !=null){
            $from    = Carbon::parse($request->startdate)->startOfDay()->toDateTimeString();
            $to      = Carbon::parse($request->to)->endOfDay()->toDateTimeString();
            return Excel::download(new OrderExport($from,$to), 'order.xlsx');
        }else{
            return Excel::download(new OrderExport($from,$to), 'order.xlsx');
        }
        //$Orders = Order::whereBetween('created_at', [$from, $to])->get();
    }


}
