<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Sector;
use App\Models\Services;    
use App\Models\Portfolio;
use App\Models\Technology;
use App\Models\Testimonial;
use App\Models\PrivacyPolicy;
use App\Models\ExploreSection;
use App\Models\WebsiteBanners;
use App\Models\TermsAndConditions;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct() {}

    public function index()
    {

        $page_name = "index";

        $page_title = "home";

        $current_page = "home";

        $schema_image = "includes-frontend/images/logo-white.webp";



        $blog = Blogs::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('position', 'desc')->limit(5)->get();
        $testimonials = Testimonial::where('status', 1)->where('show_at_homepage', 1)->orderBy('position', 'asc')->limit(10)->get();
        $technologies = Technology::where('status', 1)->orderBy('order')->get();
        $exploreSections = ExploreSection::orderBy('id', 'desc')->where('status', 1)->get();
        $services = Services::where('status', 1)->get();
        $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

        $sectors = Sector::where('status', 1)->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'blog', 'portfolio', 'schema_image', 'testimonials', 'technologies', 'sectors', 'exploreSections', 'web_banner', 'services'));
    }
}
