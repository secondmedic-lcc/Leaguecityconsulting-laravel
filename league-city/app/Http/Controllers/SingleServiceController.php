<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class SingleServiceController extends Controller
{
    public function index()
    {

        $page_name = "singleservice";

        $page_title = "singleservice";

        $current_page = "singleservice";
        

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
    // public function index()
    // {

    //     $page_name = "singleservice";

    //     $page_title = "singleservice";

    //     $current_page = "singleservice";

    //     $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

    //     $schema_image = @$web_banner['banner_image'];

    //     $seo_data_breadcrumb =
    //         '<script type="application/ld+json">
    //         {
    //             "@context": "https://schema.org",
    //             "@type": "BreadcrumbList",
    //             "itemListElement": 
    //             [
    //                 {
    //                     "@type": "ListItem",
    //                     "position": 1,
    //                     "name": "Home",
    //                     "item": "https://www.leaguecityconsulting.com"
    //                 },
    //                 {
    //                     "@type": "ListItem",
    //                     "position": 2,
    //                     "name": "Services"
    //                 }
    //             ]
    //         }
    //     </script>';

    //     return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'schema_image', 'seo_data_breadcrumb'));
    // }
}
