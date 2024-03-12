<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\WebsiteBanners;

class BlogsController extends Controller
{
    public function index()
    {
        $page_name = "blogs";

        $page_title = "blogs";

        $current_page = "blogs";

        $blog = Blogs::where(array('status' => 1))->orderBy('id', 'desc')->paginate(20);

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
                        "name": "Blogs"
                    }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'blog', 'web_banner', 'schema_image', 'seo_data_breadcrumb'));
    }


    public function blog_details()
    {
        $page_name = "blogs-details";

        $page_title = "blogs details";

        $current_page = "blogs-details";

        $url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);
        $pathFragments = explode('-', $this->path);
        $blog_id = end($pathFragments);

        $single_blog = Blogs::where(array('status' => 1, 'url_slug' => $this->path))->first();

        $blog = Blogs::where(array('status' => 1))->orderBy('id', 'desc')->limit(6)->get();

        $schema_image = @$single_blog->detail_image;

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
                        "item": "' . url('/') . '"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Blogs",
                        "item": "' . url('/blogs') . '"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "' . $single_blog->blog_title . '"
                    }
                ]
            }
        </script>
        
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BlogPosting",
                "mainEntityOfPage": {
    			"@type": "WebPage",
    			"@id": "' . url()->current() . '"
    			},
    			"headline": "' . $single_blog->blog_title . '",
    			"description": "LeagueCity Consulting blogs: ' . $single_blog->blog_title . '",
    			"image": "' . asset($single_blog->detail_image) . '",  
    			"author": {
    				"@type": "Organization",
                    "url": "https://www.leaguecityconsulting.com",
    				"name": "LeagueCity consulting"
    				},  
    				"publisher": {
    					"@type": "Organization",
    					"name": "LeagueCity consulting",
    					"logo": {
    						"@type": "ImageObject",
    						"url": "https://www.leaguecityconsulting.com//includes-frontend/images/logo-white.webp"
    					}
    					},
    					"datePublished": "' . date('Y-m-d', strtotime($single_blog->created_at)) . 'T' . date('H:i', strtotime($single_blog->created_at)) . '-05:00",
    					"dateModified": "' . date('Y-m-d', strtotime($single_blog->updated_at)) . 'T' . date('H:i', strtotime($single_blog->updated_at)) . '-05:00"
    		}        
        </script>

        ';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'single_blog', 'blog', 'schema_image', 'seo_data_breadcrumb'));
    }
}
