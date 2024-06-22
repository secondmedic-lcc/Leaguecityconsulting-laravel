<?php

namespace App\Http\Controllers;

use App\Models\WebsiteBanners;

class ThankyouController extends Controller
{
    
    public function index(){
        
        $page_name = "thankyou";
        
        $page_title = "thankyou";
        
        $current_page = "thankyou";

        return view('frontend/campaign-main', compact('page_name','page_title','current_page'));
    }
}
