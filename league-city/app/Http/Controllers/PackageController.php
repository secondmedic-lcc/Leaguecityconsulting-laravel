<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;
use App\Models\PackageTypes;
use App\Models\PackagePageDetails;
use App\Models\PackageIncludes;
use App\Models\Packages;
use App\Models\PackageKeyPoint;
use App\Models\PackageSubKeyPoint;

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
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);

        $package_types = PackageTypes::where(array('status'=>1,'package_slug'=>$this->path))->first();

        $details = PackagePageDetails::where(array('status'=>1,'package_id'=>$package_types->id))->first();

        $property = PackageIncludes::where(array('status'=>1,'package_for'=>$package_types->id))->get();

        $plans = Packages::where(array('status'=>1,'package_for'=>$package_types->id))->get();

        $plans_list = [];

        foreach ($plans as $p) {
            $keyPoints = PackageKeyPoint::where(['status' => 1, 'package_id' => $p->id])->get();

            $keyList = [];
            foreach ($keyPoints as $k) {
                $subKeyPoints = PackageSubKeyPoint::where(['status' => 1, 'keypoint_id' => $k->id])->get();
                $k->sub_key = $subKeyPoints;
                $keyList[] = $k;
            }

            $plans_list[$p->id] = [
                'package' => $p,
                'keypoints' => $keyList,
            ];
        }

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'schema_image', 'seo_data_breadcrumb','package_types','details','property','plans','plans_list'));
    }
}
