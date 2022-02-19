<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Products;
use Illuminate\Http\Request;
use App\Order;
use App\District;
use App\OrderDetails;
use App\OrderAddress;
use App\CartSetting;
use Mail;
use App\Mail\OrderMail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;
use Cart;
use Auth;
class OrderController extends Controller
{


    public function orderManage(){
        return view('Admin.ordermanage');
    }

    
    public function order(Request $request){
        $this->validate($request,[
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Email' => 'required',
            'payment_method' => 'required',
            'shipping_method' => 'required',
            'agree' => 'required',
        ]);
        
        
        $City = $request->City;
        $Name = $request->Name;
        $Mobile = $request->Mobile;
        $Email = $request->Email;
        $Address = $request->Address;
        $cartSetting = CartSetting::latest()->first();
        $OrderNumber = 0;
        $SubTotal = 0;
        $ShipingCharge = $cartSetting->shipping;
        
        
        
        $order = new Order();
        if(Auth::check()){
            $order->UserID = Auth::user()->id;
        }
        
        $order->TotalAmonut = 0;
        $order->SubTotal = 0;
        $order->PaymentMethod = "";
        $order->CurrencyID = null;
        
        if($request->shipping_method=='Pickup'){
            $order->ShippingCharge = 0;
            $order->DeliveryType = "Pickup";
        }else{
            $order->ShippingCharge = $cartSetting->shipping;
            $order->DeliveryType = "HomeDelivery";
        }
        $order->Vat = 0;
        $order->OrderDate = date('Y-m-d');
        $order->TransactionID = null;
        $order->Status = "Pending";
        $order->save();
        $latestRecord = Order::latest()->first(); 
        $OrderNumber = $OrderNumber + $latestRecord->id;
        
        
        $shipping = new OrderAddress();
        $shipping->Name     = $request->Name;
        $shipping->City     = $request->City;
        $shipping->Mobile   = $request->Mobile;
        $shipping->Email    = $request->Email;
        $shipping->OrderID  = $OrderNumber;
        $shipping->Address  = $request->Address;
        $shipping->save();
        
        
        foreach(Cart::content() as $row){
            $orderDetails = new OrderDetails();
            $orderDetails->OrderID          = $OrderNumber;
            $orderDetails->ProductID        = $row->id;
            $orderDetails->Qty              = $row->qty;
            $orderDetails->Price            = $row->price;
            $orderDetails->Weight           = $row->weight;
            $orderDetails->save();
            $SubTotal = $SubTotal + $row->price;
        }
        
        $VatPercentage = $cartSetting->vat;
        $Vat = $SubTotal/100*$VatPercentage;
        $OrderUpdate = Order::where('id',$OrderNumber)->first();
        $OrderUpdate->SubTotal = $SubTotal;
        $OrderUpdate->Vat = $Vat;
        $TotalAmount = $SubTotal+$Vat+$cartSetting->shipping;
        $OrderUpdate->TotalAmonut = $TotalAmount;
        $OrderUpdate->save();
        
        $Products = Products::where('id',$request->ProductId)->first();
        $incomeMailAddress = "drinkcanbd@gmail.com";
        Mail::to($incomeMailAddress)->send(new OrderMail($Name,$Mobile,$Address,$City,$Email,$TotalAmount,$SubTotal,$Vat,$ShipingCharge));
        
        Cart::destroy();
       return redirect("sucess")->with('order-sucess-message','Order Successfully Submitted, Order ID: THI000'.$OrderNumber);
    }
    
    
    
    
    public function sucessOrder(){
        return view('frontend.sucess-order');
    }

    
    
    public function orderEdit($id){
        $Order = Order::where('id',$id)->first();
        $Districts = District::all();
        return view('Admin.order-edit',compact('Order','Districts'));
    }
    
    public function orderView($id){
        $Order = Order::where('id',$id)->first();
        return view('Admin.order-view',compact('Order'));
    }
    

    public function orderUpdate(Request $request,$id){
        $this->validate($request,[
            'Name' => 'required',
            'Mobile' => 'required',
            'Address' => 'required',
        ]);
        
        
        $Selected = Order::where('id',$id)->first();
        $Selected->Status = request('Status');
        $Selected->Comment = request('Comment');
        $Selected->save();
        
        
        $OrderAddress = OrderAddress::where('OrderID',$id)->first();
        $OrderAddress->Name =  request('Name');
        $OrderAddress->Mobile =  request('Mobile');
        $OrderAddress->Email =  request('Email');
        $OrderAddress->Address =  request('Address');
        $OrderAddress->City =  request('City');
        $OrderAddress->save();
        
        return redirect()->to('admin/order-manage')->with('message','Order Update Sucessfully ...');
    }
    
    
    

    public function orderDelete($id){
        $Order = Order::find($id);
        $Address = OrderAddress::where('OrderID',$id)->first();
        
        OrderDetails::where('OrderID',$id)->delete();
        $Address->delete();
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
