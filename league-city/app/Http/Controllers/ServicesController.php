<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        
        $page_name = "services";
        
        $page_title = "services";
        
        $current_page = "services";

        return view('frontend/main', compact('page_name','page_title','current_page'));
    }
}
