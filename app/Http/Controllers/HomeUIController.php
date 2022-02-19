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


    public function complaint(){
        return view('frontend.complaint');
    }

    public function waterPurifire(){
        return view('frontend.water-purifire');
    }

    public function siteMap(){
        return view('frontend.sitemap');
    }


    public function termsCondition(){
        return view('frontend.terms-condition');
    }

    public function privacyPolicy(){
        return view('frontend.privacy-policy');
    }
    
    public function companyDocument(){
         return view('frontend.company-document');
    }
    
    public function returnRefundPolicy(){
         return view('frontend.return-refund-policy');
    }
    
    

}
