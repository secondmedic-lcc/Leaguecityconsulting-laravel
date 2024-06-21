<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\admin\PortfolioController;
use App\Http\Controllers\backend\admin\CustomersController;
use App\Http\Controllers\backend\admin\PortfolioServicesController;
use App\Http\Controllers\backend\admin\BlogsController;
use App\Http\Controllers\backend\admin\ProductsController;
use App\Http\Controllers\backend\admin\IndustryController;
use App\Http\Controllers\backend\admin\WebsiteBannersController;
use App\Http\Controllers\backend\admin\PackagesController;
use App\Http\Controllers\backend\admin\PackageIncludesController;
use App\Http\Controllers\backend\admin\PackageTypesController;
use App\Http\Controllers\ErrorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\Controller::class, 'index']);

Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('/packages/{package_slug}', [App\Http\Controllers\PackageController::class, 'index']);

Route::post('packages/store', [App\Http\Controllers\PackageController::class, 'store'])->name('packages-request');

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/singleservice', [App\Http\Controllers\SingleServiceController::class, 'index']);

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index']);

Route::post('/contact-us', [App\Http\Controllers\ContactUsController::class, 'store']);

Route::get('/saas-campaign', [App\Http\Controllers\SaasCampaign1Controller::class, 'index']);

Route::post('campaign', [App\Http\Controllers\SaasCampaign1Controller::class, 'store'])->name('campaign.store');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index']);

Route::get('portfolio/{url}', [App\Http\Controllers\PortfolioController::class, 'portfolio_details']);

Route::get('/singleportfolio', [App\Http\Controllers\SinglePortfolioController::class, 'index']);

Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index']);

Route::get('blogs/{url}', [App\Http\Controllers\BlogsController::class, 'blog_details']);

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);

Route::get('products/{url}', [App\Http\Controllers\ProductsController::class, 'products_details']);

Route::get('terms-and-conditions', [App\Http\Controllers\TermsController::class, 'index']);

Route::get('privacy-policy', [App\Http\Controllers\PrivacyPolicyController::class, 'index']);

Route::get('/singleproduct', [App\Http\Controllers\SingleProductController::class, 'index']);

Route::get('sitemap.xml', function () {
    return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});


/* Route::get('/', function () { return view('auth/login'); }); */

Auth::routes();

Route::get('/register', [App\Http\Controllers\backend\LoginController::class, 'logout']);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index']);

    /* All Routes for Contact Request */
    Route::get('contact-request', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'index']);

    Route::get('contact-request-delete/{id}', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'destroy']);

    /* All Routes for Contact Request */
    Route::get('plan-requests', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'package_request']);

    Route::get('contact-request-delete/{id}', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'destroy']);


    /* All Routes for Customers */
    Route::get('customers', [CustomersController::class, 'index']);

    Route::post('customers', [CustomersController::class, 'store']);

    Route::get('customers-list', [CustomersController::class, 'list']);

    Route::get('customers/{id}', [CustomersController::class, 'edit']);

    Route::post('customers/{id}', [CustomersController::class, 'update']);

    Route::get('customers-delete/{id}', [CustomersController::class, 'destroy']);


    /* All Routes for Portfolio */
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');

    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');

    Route::get('/portfolio/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');

    Route::post('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');

    Route::get('portfolio-delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


    /* All Routes for Portfolio Services */
    Route::get('/portfolio-services', [PortfolioServicesController::class, 'index'])->name('portfolio-services');

    Route::post('/portfolio-services', [PortfolioServicesController::class, 'store'])->name('portfolio-services.store');

    Route::get('/portfolio-services/{id}', [PortfolioServicesController::class, 'edit'])->name('portfolio-services.edit');

    Route::post('/portfolio-services/{id}', [PortfolioServicesController::class, 'update'])->name('portfolio-services.update');

    Route::get('portfolio-services-delete/{id}', [PortfolioServicesController::class, 'destroy'])->name('portfolio-services.destroy');

    Route::post('/portfolio-details/{id}', [PortfolioController::class, 'update_description'])->name('portfolio.update_description');

    /* All Routes for Portfolio Images */
    Route::post('portfolio-images', [App\Http\Controllers\backend\admin\PotfolioImageController::class, 'store']);

    Route::post('portfolio-images/{id}', [App\Http\Controllers\backend\admin\PotfolioImageController::class, 'update'])->name('portfolio-images.update');

    Route::get('portfolio-images-delete/{id}', [App\Http\Controllers\backend\admin\PotfolioImageController::class, 'destroy']);


    /* All Routes for Portfolio Services */
    Route::get('blogs', [BlogsController::class, 'index'])->name('blogs');

    Route::get('blogs/create', [BlogsController::class, 'create'])->name('blogs.create');

    Route::post('blogs', [BlogsController::class, 'store'])->name('blogs.store');

    Route::get('blogs/{id}', [BlogsController::class, 'edit'])->name('blogs.edit');

    Route::post('blogs/{id}', [BlogsController::class, 'update'])->name('blogs.update');

    Route::get('blogs-delete/{id}', [BlogsController::class, 'destroy'])->name('blogs.destroy');



    /* All Routes for Products Services */
    Route::get('products', [ProductsController::class, 'index'])->name('products');

    Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');

    Route::post('products', [ProductsController::class, 'store'])->name('products.store');

    Route::get('products/{id}', [ProductsController::class, 'edit'])->name('products.edit');

    Route::post('products/{id}', [ProductsController::class, 'update'])->name('products.update');

    Route::get('products-delete/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');


    /* Routes for Seo Data */
    Route::get('seo-data', [App\Http\Controllers\backend\admin\SeoDataController::class, 'index']);

    Route::get('seo-data/create', [App\Http\Controllers\backend\admin\SeoDataController::class, 'create']);

    Route::post('seo-data/create', [App\Http\Controllers\backend\admin\SeoDataController::class, 'store']);

    Route::get('seo-data/edit/{service_id}', [App\Http\Controllers\backend\admin\SeoDataController::class, 'edit']);

    Route::post('seo-data/edit/{service_id}', [App\Http\Controllers\backend\admin\SeoDataController::class, 'update']);

    Route::get('seo-data-delete/{id}', [App\Http\Controllers\backend\admin\SeoDataController::class, 'destroy']);




    /* All Routes for Industry */
    Route::get('industry', [IndustryController::class, 'index'])->name('industry');

    Route::get('industry/create', [IndustryController::class, 'create'])->name('industry.create');

    Route::post('industry', [IndustryController::class, 'store'])->name('industry.store');

    Route::get('industry/{id}', [IndustryController::class, 'edit'])->name('industry.edit');

    Route::post('industry/{id}', [IndustryController::class, 'update'])->name('industry.update');

    Route::get('industry-delete/{id}', [IndustryController::class, 'destroy'])->name('industry.destroy');



    /* All Routes for Website Banner */
    Route::get('website-banner', [WebsiteBannersController::class, 'index'])->name('website-banner');

    Route::get('website-banner/create', [WebsiteBannersController::class, 'create'])->name('website-banner.create');

    Route::post('website-banner', [WebsiteBannersController::class, 'store'])->name('website-banner.store');

    Route::get('website-banner/{id}', [WebsiteBannersController::class, 'edit'])->name('website-banner.edit');

    Route::post('website-banner/{id}', [WebsiteBannersController::class, 'update'])->name('website-banner.update');

    Route::get('website-banner-delete/{id}', [WebsiteBannersController::class, 'destroy'])->name('website-banner.destroy');



    /* All Routes for Packages */
    Route::get('packages', [PackagesController::class, 'index'])->name('packages');

    Route::get('packages/create', [PackagesController::class, 'create'])->name('packages.create');

    Route::post('packages/store/{id}/{name}', [PackagesController::class, 'store'])->name('packages.store');

    Route::get('packages/{id}', [PackagesController::class, 'edit'])->name('packages.edit');

    Route::post('packages/{id}', [PackagesController::class, 'update'])->name('packages.update');

    Route::get('packages-delete/{id}', [PackagesController::class, 'destroy'])->name('packages.destroy');

    Route::post('packages-key-point/{id}', [PackagesController::class, 'updateKeyPoint'])->name('packages.update.keypoint');

    Route::get('packages-key-point/{id}', [PackagesController::class, 'deleteKeyPoint'])->name('packages.delete.keypoint');

    Route::get('packages-sub-keypoints/{package_id}/{keypoint}', [PackagesController::class, 'subKeyPoints'])->name('packages.sub-keypoints');

    Route::post('packages-sub-keypoints', [PackagesController::class, 'subKeyPoints_store'])->name('packages.sub-keypoints.store');

    Route::post('packages-sub-keypoints/{id}', [PackagesController::class, 'subKeyPoints_update'])->name('packages.sub-keypoints.update');

    Route::get('packages-sub-keypoints-delete/{id}', [PackagesController::class, 'deleteSubKeyPoint'])->name('packages.sub-keypoints.delete');


    /* All Routes for Packages  Includes*/
    Route::get('package-includes', [PackageIncludesController::class, 'index'])->name('package.includes');

    Route::get('package-includes/create', [PackageIncludesController::class, 'create'])->name('package.includes.create');

    Route::post('package-includes', [PackageIncludesController::class, 'store'])->name('package.includes.store');

    Route::get('package-includes/{id}', [PackageIncludesController::class, 'edit'])->name('package.includes.edit');

    Route::post('package-includes/{id}', [PackageIncludesController::class, 'update'])->name('package.includes.update');

    Route::get('package-includes-delete/{id}', [PackageIncludesController::class, 'destroy'])->name('package.includes.destroy');


    /* All Routes for Package Types */
    Route::get('package-types', [PackageTypesController::class, 'index'])->name('package.types');

    Route::post('package-types', [PackageTypesController::class, 'store'])->name('package.types.store');

    Route::get('package-types/{packageType}', [PackageTypesController::class, 'edit'])->name('package.types.edit');

    Route::post('package-types/{packageType}', [PackageTypesController::class, 'update'])->name('package.types.update');

    Route::get('package-types-delete/{id}', [PackageTypesController::class, 'destroy'])->name('package.types.destroy');

    Route::post('package/details/{packageType}', [PackageTypesController::class, 'package_page_details'])->name('package.page.details');

    
    /* Create Routes for Category */
    Route::get('category', [App\Http\Controllers\backend\admin\CategoryController::class, 'index'])->name("category.create");

    Route::post('category', [App\Http\Controllers\backend\admin\CategoryController::class, 'store'])->name("category.store");

    Route::get('category-list', [App\Http\Controllers\backend\admin\CategoryController::class, 'list'])->name("category");

    Route::get('category/{id}', [App\Http\Controllers\backend\admin\CategoryController::class, 'edit'])->name("category.edit");

    Route::post('category/{id}', [App\Http\Controllers\backend\admin\CategoryController::class, 'update'])->name("category.update");

    Route::get('category-delete/{id}', [App\Http\Controllers\backend\admin\CategoryController::class, 'destroy'])->name("category.destory");

    
    Route::get('campaign', [App\Http\Controllers\backend\admin\CampaignController::class, 'index'])->name('campaign.list');

    Route::get('campaign-delete/{id}', [App\Http\Controllers\backend\admin\CampaignController::class, 'destroy'])->name("campaign.destory");

    Route::post('campaign/update', [App\Http\Controllers\backend\admin\CampaignController::class, 'update'])->name('campaign.update');

});

Route::get('/logout', [App\Http\Controllers\backend\LoginController::class, 'logout']);

Route::get('state/{country_id}', [App\Http\Controllers\HomeController::class, 'state']);

Route::get('city/{state_id}', [App\Http\Controllers\HomeController::class, 'city']);

Route::get('/industry', [App\Http\Controllers\IndustryController::class, 'index']);

Route::get('industry/{url}', [App\Http\Controllers\IndustryController::class, 'industry_details']);


// for error
Route::get('/404', [ErrorController::class, 'index'])->name('404');
// Route::fallback([ErrorController::class, 'index'])->name('404fallback');