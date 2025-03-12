<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Testimonial;
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

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('position', 'asc')->limit(5)->get();
        $testimonials = Testimonial::where('status', 1)->where('show_at_homepage', 1)->orderBy('position', 'asc')->limit(10)->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'blog', 'portfolio', 'schema_image', 'testimonials'));
    }
}
