<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\admin\PortfolioController;
use App\Http\Controllers\backend\admin\CustomersController;
use App\Http\Controllers\backend\admin\PortfolioServicesController;
use App\Http\Controllers\backend\admin\BlogsController;
use App\Http\Controllers\backend\admin\ProductsController;
use App\Http\Controllers\backend\admin\IndustryController;
use App\Http\Controllers\backend\admin\WebsiteBannersController;

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

Route::get('/package', [App\Http\Controllers\PackageController::class, 'index']);

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index']);

Route::post('/contact-us', [App\Http\Controllers\ContactUsController::class, 'store']);

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index']);

Route::get('portfolio/{url}', [App\Http\Controllers\PortfolioController::class, 'portfolio_details']);

Route::get('/singleportfolio', [App\Http\Controllers\SinglePortfolioController::class, 'index']);

Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index']);

Route::get('blogs/{url}', [App\Http\Controllers\BlogsController::class, 'blog_details']);

Route::get('/singleblog', [App\Http\Controllers\SingleBlogController::class, 'index']);


Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);

Route::get('products/{url}', [App\Http\Controllers\ProductsController::class, 'products_details']);

Route::get('terms-and-conditions', [App\Http\Controllers\TermsController::class, 'index']);

Route::get('privacy-policy', [App\Http\Controllers\PrivacyPolicyController::class, 'index']);

Route::get('sitemap.xml', function () {
    return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});


/* Route::get('/', function () { return view('auth/login'); }); */

Auth::routes();

Route::get('/register', [App\Http\Controllers\backend\LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /* All Routes for Contact Request */
    Route::get('contact-request', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'index']);

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
});

Route::get('/logout', [App\Http\Controllers\backend\LoginController::class, 'logout']);

Route::get('state/{country_id}', [App\Http\Controllers\HomeController::class, 'state']);

Route::get('city/{state_id}', [App\Http\Controllers\HomeController::class, 'city']);

Route::get('/industry', [App\Http\Controllers\IndustryController::class, 'index']);

Route::get('industry/{url}', [App\Http\Controllers\IndustryController::class, 'industry_details']);
