<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\WebsiteBanners;

class BlogsController extends Controller
{
    public function index()
    {
        $page_name = "blogs";

        $page_title = "blogs";

        $current_page = "blogs";
        
        $blog = Blogs::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        $schema_image = @$web_banner['banner_image']; 

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','blog','web_banner','schema_image'));
    }
    
    
    public function blog_details()
    {
        $page_name = "blogs-details";

        $page_title = "blogs details";

        $current_page = "blogs-details";
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);
        $blog_id = end($pathFragments);
        
        $single_blog = Blogs::where(array('status'=>1,'url_slug'=>$this->path))->first();
        
        $blog = Blogs::where(array('status'=>1))->orderBy('id','desc')->limit(6)->get();

        $schema_image = @$single_blog->detail_image; 

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','single_blog','blog','schema_image'));
    }
}
