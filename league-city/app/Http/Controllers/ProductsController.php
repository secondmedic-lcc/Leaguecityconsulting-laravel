<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class ProductsController extends Controller
{
    public function index()
    {
        $page_name = "products";

        $page_title = "products";

        $current_page = "products";

        $product = Products::where(array('status'=>1))->orderBy('id','desc')->get();
        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','product','web_banner'));
    }
    
    public function products_details()
    {
        $page_name = "products-details";

        $page_title = "Product details";

        $current_page = "products-details";
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
      
        $product_details = Products::where(array('status'=>1,'url_slug'=>$this->path))->first();

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','product_details','web_banner'));
    }
}
