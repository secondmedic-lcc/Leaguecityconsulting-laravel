<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class TermsController extends Controller
{

    public function index()
    {

        $page_name = "terms";

        $page_title = "Terms & Conditions";

        $current_page = "terms-and-conditions";

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

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
                        "name": "Terms And Conditions"
                    }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','web_banner', 'seo_data_breadcrumb'));
    }
}
