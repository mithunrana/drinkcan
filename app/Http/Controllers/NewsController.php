<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function index(){
        $Newses = News::where('ActiveStatus',1)->orderBy('id', 'DESC')->paginate(8);
        return view('frontend.water-in-news',compact('Newses'));
    }

    public function NewsView($url){
        $RelatedNews = News::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(1)->take(4)->get();
        $News = News::where('Permalink',$url)->first();
        return view('frontend.news-view',compact('News','RelatedNews'));
    }


    public function newsManage(){
        return view('Admin/newsmanage');
    }

    public function add(){
        return view('Admin.newsadd');
    }


    public function store(Request $request){
        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required',
            'NewsName' => 'required',
        ]);

        News::create([
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'NewsName' => $request->NewsName,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage1' => $request->FeaturedImage1,
            'ImageAltText' => $request->ImageAltText,
            'ImageTitleText' => $request->ImageTitleText,
            'FeaturedDetails' => $request->FeaturedDetails,
            'ProjectDetails' => $request->ProjectDetails,
        ]);
        return redirect()->to('admin/news-manage')->with('message','News Added Successfully');
    }








    public function edit($id){
        $News =  News::findOrFail($id);
        return view('Admin.newsedit',compact('News'));
    }


    public function update($id,Request $request){
        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required",
            'NewsName' => 'required',
        ]);

        $Portfolio = News::findOrFail($id);
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->NewsName = request('NewsName');
        $Portfolio->Permalink = request('Permalink');
        $Portfolio->SeoKeyword= request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImage1 = request('FeaturedImage1');
        $Portfolio->ImageAltText = request('ImageAltText');
        $Portfolio->ImageTitleText = request('ImageTitleText');
        $Portfolio->FeaturedDetails = request('FeaturedDetails');
        $Portfolio->ProjectDetails = request('ProjectDetails');
        $Portfolio->save();
        return redirect()->to('admin/news-manage')->with('message','News Update Successfully');
    }

    public function delete($id){
        $Portfolio = News::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/news-manage')->with('message','News delete Successfully');
    }


    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  News::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/news-manage')->with('message','News Active Successfully');
        }else{
            $Portfolio =  News::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/news-manage')->with('message','News Deactive Successfully');
        }
    }


}
