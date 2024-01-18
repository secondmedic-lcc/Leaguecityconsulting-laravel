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

/*
Route::get('/', [App\Http\Controllers\Controller::class, 'index']);

Route::get('/pharmacy/{id}', [App\Http\Controllers\PharmacyController::class, 'index']);
Route::get('/pharmacy/prescription/{id}', [App\Http\Controllers\PharmacyController::class, 'prescription']);

Route::post('/pharmacy-leads', [App\Http\Controllers\PharmacyController::class, 'store']);

Route::get('/{url}/labs', [App\Http\Controllers\LabsController::class, 'index']);

Route::get('/labs', [App\Http\Controllers\LabsController::class, 'index']);

Route::get('/labs/{package_url}', [App\Http\Controllers\LabsController::class, 'lab_details']);

Route::get('/{url}/labs/{package_url}', [App\Http\Controllers\LabsController::class, 'lab_details']);

Route::get('/labs/{package_url}/booking-form', [App\Http\Controllers\LabsController::class, 'booking_form']);

Route::get('/{url}/labs/{package_url}/booking-form', [App\Http\Controllers\LabsController::class, 'booking_form']);

Route::get('/labs/booking/{booking_id}', [App\Http\Controllers\LabsController::class, 'placeThyrocareOrderAPI']);

Route::post('/lab/thyrocare_slot', [App\Http\Controllers\LabsController::class, 'get_app_thyrocare_slot']);


Route::get('/{url}/homecare', [App\Http\Controllers\HomecareController::class, 'index']);

Route::get('/homecare', [App\Http\Controllers\HomecareController::class, 'index']);

Route::post('/homecare', [App\Http\Controllers\HomecareController::class, 'store']);

Route::get('/doctor-consultation', [App\Http\Controllers\DoctorConsultationController::class, 'index']);

Route::get('/doctor-consultation/{doctor_url}', [App\Http\Controllers\DoctorConsultationController::class, 'doctor_details']);

Route::get('/{url}/doctor-consultation', [App\Http\Controllers\DoctorConsultationController::class, 'index']);

Route::get('/{url}/doctor-consultation/{doctor_url}', [App\Http\Controllers\DoctorConsultationController::class, 'doctor_details']);

Route::post('/doctor-consultation', [App\Http\Controllers\DoctorConsultationController::class, 'store']);

Route::get('/pay-now/{order_id}/{amount}', [App\Http\Controllers\DoctorConsultationController::class, 'pay_now']);
*/

Route::get('/', function () { return view('auth/login'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function() {
    
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