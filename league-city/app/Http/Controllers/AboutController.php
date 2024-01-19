<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index(){
        
        $page_name = "about-us";
        
        $page_title = "about-us";
        
        $current_page = "about-us";

        return view('frontend/main', compact('page_name','page_title','current_page'));
    }
}
