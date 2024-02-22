<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioServices;
use App\Models\PotfolioImage;
use App\Models\WebsiteBanners;

class PortfolioController extends Controller
{
    public function index()
    {
        $page_name = "portfolio";

        $page_title = "portfolio";

        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status'=>1))->orderBy('id','desc')->get();

        $schema_image = asset('includes-frontend/images/logo-white.png');

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','portfolio','schema_image'));
    }
    
    public function portfolio_details()
    {
        $page_name = "portfolio-details";

        $page_title = "portfolio details";

        $current_page = "portfolio-details";
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);
        $portfolio_id = end($pathFragments);

        $portfolio = Portfolio::where(array('status'=>1,'url_slug'=>$this->path))->first();

        $portfolio['portfolio_services'] = PortfolioServices::where(array('status'=>1,'portfolio_id'=>$portfolio_id))->get();

        $portfolio['portfolio_images'] = PotfolioImage::where(array('status'=>1,'portfolio_id'=>$portfolio_id))->get();

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        $schema_image = @$web_banner['banner_image']; 

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','portfolio' ,'web_banner','schema_image'));
    }
}
