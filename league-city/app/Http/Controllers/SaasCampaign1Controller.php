<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class SaasCampaign1Controller extends Controller
{
    public function index()
    {

        $page_name = "saas-campaign-1";

        $page_title = "Saas Campaign";

        $current_page = "Saas Campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio'));
    }
}
