<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\CeoTestimonial;
use App\Models\WebsiteBanners;

class AboutController extends Controller
{
    
    public function index(){
        
        $page_name = "about-us";
        
        $page_title = "about-us";
        
        $current_page = "about-us";
        
        $team_members = TeamMember::where('status', '1')->get();
        $about_us = AboutUs::first();
        $ceo_testimonial = CeoTestimonial::first();
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

        

        return view('frontend/main', compact('page_name','page_title','current_page','web_banner', 'schema_image', 'seo_data_breadcrumb','team_members','about_us','ceo_testimonial'));
    }
}
