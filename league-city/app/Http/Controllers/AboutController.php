<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class AboutController extends Controller
{
    
    public function index(){
        
        $page_name = "about-us";
        
        $page_title = "about-us";
        
        $current_page = "about-us";

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        return view('frontend/main', compact('page_name','page_title','current_page','web_banner'));
    }
}
