<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogTutorial;
class HomeUIController extends Controller
{


    public function index(){
        return view('frontend.index');
    }



    public function about(){
        return view('frontend.about');
    }


    public function contact(){
        return view('UI.contact');
    }


    public function complaint(){
        return view('frontend.complaint');
    }

    public function waterPurifire(){
        return view('frontend.water-purifire');
    }

    public function siteMap(){
        return view('frontend.sitemap');
    }

    public function login(){
        return view('UI.login');
    }


}
