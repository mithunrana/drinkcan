<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Division;
use Cart;

class CartController extends Controller
{
    public function index(){
        return view('frontend.cart');
    }

    
    
    public function checkout(){
        $CartCount = Cart::count();
        if ($CartCount>0){
            $Divisions = Division::all();
            return view('frontend.checkout',compact('Divisions'));
        }
        else{
            return redirect("");
        }
    }

    
    
    public function store(Request $request, $id)
    {
        $product = Products::find($id);
        $data['id'] = $id;
        $data['name'] = $product->Name;
        $data['qty'] = 1;
        $data['price'] = $product->CurrentPrice;
        $data['weight'] = 0;
        $data['options']['image'] = $product->image->imageurl;
        Cart::add($data);
        return response()->json(['success' => 'পণ্যটি কার্টে যুক্ত হয়েছে !']);
    }
    
    

    public function cartCount(){
        $data = Cart::count();
       return response()->json($data);
    }

    public function cartTotal(){
        $data = Cart::totalFloat();
       return response()->json($data);
    }

    
    public function dropCart(){
        return view('frontend.cart.drop-cart');
    }
    public function sideCart(){
        return view('frontend.cart.side-cart');
    }
    public function pageCart(){
        return view('frontend.cart.page-cart');
    }
    
    public function cartdelete($id) { 
       $data = Cart::remove($id);
       return redirect()->back();
    }
    
    
    public function detailsStore(Request $request, $id){
        
        $product = Product::where('id', $id)->first();
        $size = Size::where('id', $request->size_id)->first();
        $color = Color::where('id', $request->color_id)->first();
        
        $data['id'] = $id;
        $data['name'] = $product->product_name;
        $data['qty'] = $request->qty;
        if($product->price_active == 1){
            $data['price'] = $product->selling_price;
        }else{
            $data['price'] = $product->discount_price;
        }
        $data['weight'] = 0;
        $data['options']['image'] = $product->default_image;
        $data['options']['size_id'] = !empty($request->size_id) ? $request->size_id : '';
        $data['options']['size'] = !empty($size->size) ? $size->size : '';
        $data['options']['color_id'] = !empty($request->color_id) ? $request->color_id : '';
        $data['options']['color'] = !empty($color->color) ? $color->color : '';
    
        Cart::add($data);
        return response()->json($data);
    }
    
    public function qtyInc($rowId){
        
        $data = Cart::get($rowId);
        Cart::update($rowId, $data->qty + 1);
        return response()->json($data);
        
    }
    public function qtyDec($rowId){
       /* $selectedProduct = Cart::get($rowId);
        return $selectedProduct->count();
        
        if($selectedProduct == 1){
            
        }else{
        $data = Cart::get($rowId);
        Cart::update($rowId, $data->qty - 1);
        return response()->json($data);
        }*/
        
        $data = Cart::get($rowId);
        Cart::update($rowId, $data->qty - 1);
        return response()->json($data);
       
        
    }
}
