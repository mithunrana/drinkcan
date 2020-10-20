<?php

namespace App\Http\Controllers;

use App\ClientFeedBack;
use Illuminate\Http\Request;
class CliendFeedBack extends Controller
{
    public function manage(){
        return view('Admin.clientfeedbackmanage');
    }

    public function add(){
        return view('Admin.cliendfeedbackadd');
    }

    public function store(Request $request){
        $this->validate($request,[
            'Name' => 'required',
            'Details' => 'required',
            'FeaturedImage' => 'required',
        ]);

        ClientFeedBack::create([
            'Name' => $request->Name,
            'Details' => $request->Details,
            'FeaturedImage' => $request->FeaturedImage,
            'ImageAltText'=> $request->ImageAltText,
            'ImageTitleText'=> $request->ImageTitleText,
        ]);
        return redirect()->to('admin/client-feedback-manage')->with('message','Client Feedback Successfully Added');
    }

    public function edit($id){
        $feedback = ClientFeedBack::where('id',$id)->first();
        return view('Admin.clientfeedbackedit',compact('feedback'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'Name' => 'required',
            'Details' => 'required',
            'FeaturedImage' => 'required',
        ]);
        $Blog = ClientFeedBack::findOrFail($id);
        $Blog->Name = request('Name');
        $Blog->Details = request('Details');
        $Blog->FeaturedImage = request('FeaturedImage');
        $Blog->ImageAltText = request('ImageAltText');
        $Blog->ImageTitleText = request('ImageTitleText');
        return redirect()->to('admin/client-feedback-manage')->with('message','Client Feedback Update Successfully');
    }

    public function delete($id){
        $Blog = ClientFeedBack::find($id);
        $Blog->delete();
        return redirect()->to('admin/client-feedback-manage')->with('message','Feedback Delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Blog = ClientFeedBack::findOrFail($portfolioId);
            $Blog->ActiveStatus = '1';
            $Blog->save();
            return redirect()->to('admin/client-feedback-manage')->with('message', 'Feedback Active Successfully');
        }else{
            $Blog =  ClientFeedBack::findOrFail($portfolioId);
            $Blog->ActiveStatus = '0';
            $Blog->save();
            return redirect()->to('admin/client-feedback-manage')->with('message','Feedback Deactive Successfully');
        }
    }
}
