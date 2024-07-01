<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioServices;
use App\Models\PotfolioImage;
use App\Models\WebsiteBanners;
use App\Models\Category;

class PortfolioController extends Controller
{
    public function index()
    {
        $page_name = "portfolio";

        $page_title = "portfolio";

        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->get();

        $category = Category::where(array('status' => 1))->orderBy('id', 'asc')->get();

        $schema_image = asset('includes-frontend/images/logo-white.webp');

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
                        "name": "Portfolio"
                    }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'portfolio', 'schema_image', 'seo_data_breadcrumb','category'));
    }

    public function portfolio_details($url="")
    {
        $page_name = "portfolio-details";

        $page_title = "portfolio details";

        $current_page = "portfolio-details";

        /*  $url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);  */

        $portfolio = Portfolio::where(array('status' => 1, 'url_slug' => $url))->first();

        $portfolio['portfolio_services'] = PortfolioServices::where(array('status' => 1, 'portfolio_id' => $portfolio->id))->get();

        $portfolio['portfolio_images'] = PotfolioImage::where(array('status' => 1, 'portfolio_id' => $portfolio->id))->get();

        $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

        $schema_image = @$web_banner['banner_image'];

        $portfolio_name = $portfolio['name'];

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
                        "name": "Portfolio",
                        "item": "' . url('/portfolio') . '"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "' . $portfolio['name'] . '"
                    }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'portfolio', 'web_banner', 'schema_image', 'seo_data_breadcrumb'));
    }
}
