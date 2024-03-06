<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;
use App\Models\PackageTypes;

class PackageController extends Controller
{

    public function index()
    {

        $page_name = "package";

        $page_title = "package";

        $current_page = "package-type";

        $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

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

        $package_types = PackageTypes::where('status',1)->orderBy('package_name','asc')->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'schema_image', 'seo_data_breadcrumb'));
    }
}
