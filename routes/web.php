<?php

use App\Http\Controllers\backend\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\SearchAirportController;
use App\Http\Controllers\LocalizationController;


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



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
 
    Route::get('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
    // Route::put('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
    Route::resource('roles', RoleController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');   
    //admins
    Route::get('admins', [UserController::class, 'indexAdmins'])->name('app.admins.index');
    Route::post('admins', [UserController::class, 'storeAdmin'])->name('app.admins.store');
    Route::delete('admins/{id}', [UserController::class, 'deleteAdmin'])->name('app.admins.delete');
    Route::put('admins/{id}', [UserController::class, 'updateAdmin'])->name('app.admins.update');
    // Route::get('applications',[ApplicationController::class,'index'])->name('applications');
    Route::post('application_store',[ApplicationController::class, 'store'])->name('application.store');
    Route::get('applications/all' , [ApplicationController::class,'all_applications'])->name('all_applications');
    Route::get('applications/confirmed' , [ApplicationController::class,'confirmedApplication'])->name('confirmedApplication');
    Route::get('applications/unconfirmed' , [ApplicationController::class,'unconfirmedApplication'])->name('unconfirmedApplication');
    Route::get('applications/paid',[ApplicationController::class,'paidApplication'])->name('paidApplication');
    Route::get('applications/new',[ApplicationController::class,'newApplication'])->name('newApplication');
    Route::get('applications/list' , [ApplicationController::class,'all_applications_search'])->name('all_applications_search');
    Route::get('applications/confirmed/list' , [ApplicationController::class,'confirmed_application_search'])->name('confirmed_application_search');
    Route::get('applications/unconfirmed/list' , [ApplicationController::class,'unconfirmed_application_search'])->name('unconfirmed_application_search');
    Route::get('applications/paid/list',[ApplicationController::class,'paid_application_search'])->name('paid_application_search');
    Route::get('applications/new/list',[ApplicationController::class,'new_application_search'])->name('new_application_search');
    Route::get('application/{id}',[ApplicationController::class, 'singleApplication'])->name('singleApplication');
    Route::delete('application/delete/{id}',[ApplicationController::class, 'destroy'])->name('deleteApplication');
    Route::put('application/{id}/update', [ApplicationController::class, 'statusUpdate'])->name('statusUpdate');
    Route::get('/application/{id}/pdf', [ApplicationController::class, 'createPDF'])->name('createPDF');
    Route::get('/application/{id}/pdfothers', [ApplicationController::class, 'createPDF_others'])->name('createPDF_others');
});

Route::get('applications',[ApplicationController::class,'index'])->name('applications');
Route::post('application_store',[ApplicationController::class, 'store'])->name('application.store');
//json airport names
Route::get('applications-airport-name', [SearchAirportController::class,'selectSearch'])->name('airport_names');
Route::get('/home',[HomeController::class,'index'])->name('home');
//after submit redirection
Route::get('application/accepted', [HomeController::class,'thankyou'])->name('thankyou');
//language changer
Route::get('locale/{lange}', [LocalizationController::class ,'setLang'])->name('setLang');
//Our Fee
Route::get('ourfee',[HomeController::class,'ourfee'])->name('ourfee');
//terms
Route::get('terms' ,[HomeController::class,'terms'])->name('terms');
//privacy
Route::get('privacy' ,[HomeController::class, 'privacy'])->name('privacy');