<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class ServicesController extends Controller
{
    public function index(){
        
        $page_name = "services";
        
        $page_title = "services";
        
        $current_page = "services";

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        return view('frontend/main', compact('page_name','page_title','current_page','web_banner'));
    }
}
