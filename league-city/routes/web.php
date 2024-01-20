<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index']);

Route::post('/contact-us', [App\Http\Controllers\ContactUsController::class, 'store']);

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index']);

/* Route::get('/', function () { return view('auth/login'); }); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /* All Routes for Contact Request */
    Route::get('contact-request', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'index']);

    Route::get('contact-request-delete/{id}', [App\Http\Controllers\backend\admin\ServiceProviderController::class, 'destroy']);

    /* All Routes for Customers */
    Route::get('customers', [App\Http\Controllers\backend\admin\CustomersController::class, 'index']);

    Route::post('customers', [App\Http\Controllers\backend\admin\CustomersController::class, 'store']);

    Route::get('customers-list', [App\Http\Controllers\backend\admin\CustomersController::class, 'list']);

    Route::get('customers/{id}', [App\Http\Controllers\backend\admin\CustomersController::class, 'edit']);

    Route::post('customers/{id}', [App\Http\Controllers\backend\admin\CustomersController::class, 'update']);

    Route::get('customers-delete/{id}', [App\Http\Controllers\backend\admin\CustomersController::class, 'destroy']);
});

Route::get('/logout', [App\Http\Controllers\backend\LoginController::class, 'logout']);

Route::get('state/{country_id}', [App\Http\Controllers\HomeController::class, 'state']);

Route::get('city/{state_id}', [App\Http\Controllers\HomeController::class, 'city']);
