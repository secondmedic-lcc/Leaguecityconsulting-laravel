<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    public function index()
    {
        $page_name = "blogs";

        $page_title = "blogs";

        $current_page = "blogs";
        
        $blog = Blogs::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','blog'));
    }
    
    
    public function blog_details()
    {
        $page_name = "blogs-details";

        $page_title = "blogs details";

        $current_page = "blogs->details";
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);
        $blog_id = end($pathFragments);
        
        $single_blog = Blogs::where(array('status'=>1,'id'=>$blog_id))->first();
        
        $blog = Blogs::where(array('status'=>1))->orderBy('id','desc')->limit(6)->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','single_blog','blog'));
    }
}
