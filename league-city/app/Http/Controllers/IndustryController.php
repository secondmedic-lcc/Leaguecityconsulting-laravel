<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;

class IndustryController extends Controller
{
    public function index()
    {
        $page_name = "industry/industry";

        $page_title = "industry";

        $current_page = "industry";

        $product = Industry::where(array('status'=>1))->orderBy('id','desc')->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','product'));
    }
    
    public function industry_details()
    {
        $page_name = "industry/industry-details";

        $page_title = "Product details";

        $current_page = "industry-details";
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
      
        $product_details = Industry::where(array('status'=>1,'url_slug'=>$this->path))->first();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','product_details'));
    }
}
