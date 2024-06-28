<?php

namespace App\Http\Controllers;

use App\Models\WebsiteBanners;

class ErrorController extends Controller
{
    
    public function index(){
        
        $page_name = "404";
        
        $page_title = "404";
        
        $current_page = "404";

        // return view('frontend/main', compact('page_name','page_title','current_page'));
        return response()
        ->view('frontend/main', compact('page_name', 'page_title', 'current_page'))
        ->setStatusCode(404);
    }
}
