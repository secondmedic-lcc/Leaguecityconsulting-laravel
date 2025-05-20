<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\WebsiteBanners;
use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{

    public function index()
    {

        $page_name = "privacypolicy";

        $page_title = "Privacy Policy";

        $current_page = "privacy-policy";

        $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

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
                        "name": "Privacy Policy"
                    }
                ]
            }
        </script>';

        $privacy_policy = PrivacyPolicy::first();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'seo_data_breadcrumb','privacy_policy'));
    }
}
