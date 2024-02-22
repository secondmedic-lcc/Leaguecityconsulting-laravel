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

        $schema_image = @$web_banner['banner_image'];

        $seo_data_breadcrumb = 
        '<script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": 
                [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://www.leaguecityconsulting.com"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "About Us"
                    }
                ]
            }
        </script>';

        

        return view('frontend/main', compact('page_name','page_title','current_page','web_banner', 'schema_image', 'seo_data_breadcrumb'));
    }
}
