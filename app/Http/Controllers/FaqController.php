<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
class FaqController extends Controller
{

    public function productFaq(){
        return view('admin.faqmanage');
    }

    public function storeProductFAQ(Request $request){
        $this->validate($request,[
            'ProductId' => 'required',
            'Question' => 'required',
            'Answer' => 'required',
        ]);

        Faq::create([
            'ProductId' => $request->ProductId,
            'Question' => $request->Question,
            'Answer' => $request->Answer,
        ]);
        return redirect()->to('admin/product-faq-manage')->with('message','Product FAQ Added Successfully');
    }



    public function productFAQEdit($id){
        $FAQ = Faq::where('id',$id)->first();
        return view('admin.faqedit',compact('FAQ'));
    }

    public function featureProductUpdate(Request $request,$id){
        $About = Faq::findOrFail($id);
        $About->Title = request('Title');
        $About->Content = request('Content');
        $About->ProductId = request('ProductId');
        $About->FeaturedImage = request('FeaturedImage');
        $About->ImageTitleText = request('ImageTitleText');
        $About->ImageAltText = request('ImageAltText');
        return redirect()->to('admin/product-feature-manage')->with('message','Product Feature Update Successfully');
    }


    public function featureProductDelete($id){
        $Products = Faq::find($id);
        $Products->delete();
        return redirect()->to('admin/product-feature-manage')->with('message','Product Feature Specification Delete Successfully');
    }

}
