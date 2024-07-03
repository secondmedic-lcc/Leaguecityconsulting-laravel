<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

use App\Models\ServicesIcons;
use App\Models\Category;
use App\Models\ServicesDetails;
use App\Models\ServicesImages;

class ServicesController extends Controller
{
    public function index(){
        
        $page_name = "services";
        
        $page_title = "services";
        
        $current_page = "services";

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
                        "name": "Services"
                    }
                ]
            }
        </script>';
        
        $services = Services::where(array('status'=>1))->orderBy('id','asc')->get();

        return view('frontend/main', compact('page_name','page_title','current_page','web_banner', 'schema_image', 'seo_data_breadcrumb','services'));
    }

    public function services_details()
    {
        $page_name = "singleservice";

        $page_title = "singleservice";

        $current_page = "singleservice";

        $url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);

        $services = Services::where(array('status' => 1, 'url_slug' => $this->path))->first();
        
        $services['services_details'] = ServicesDetails::where(array('status' => 1,'services_id' => $services->id,'data_for'=>'main-details'))->get();
        $services['services_sub_details'] = ServicesDetails::where(array('status' => 1,'services_id' => $services->id,'data_for'=>'sub-details'))->get();

        $services['services_images'] = ServicesImages::where(array('status' => 1, 'services_id' => $services->id))->get();

        $services['services_icons'] = ServicesIcons::where(array('status' => 1, 'services_id' => $services->id))->get();

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
                        "name": "Services",
                        "item": "' . url('/services') . '"
                    },
                    {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "' . $services['name'] . '"
                }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'schema_image', 'seo_data_breadcrumb','services'));
    }
}
