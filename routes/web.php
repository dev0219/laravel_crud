<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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


//Before login
Auth::routes(['verify' => false]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['partner']], function () {
        Route::get('/partner_dashboard', 'PartController@index')->name('partner.dashboard');
        Route::get('/partner_offer', 'PartOfferController@index')->name('partner.offer');
        Route::get('/partner_report', 'PartReportController@index')->name('partner.report');
    });

    Route::group(['middleware' => ['admin']], function () {
        
        // Application -> Admin Dashboard
        Route::get('/admin', 'DashboardController@index')->name('admin.dashboard');
        Route::get('/partner-overview', 'DashboardController@dashboardPartner');
        Route::get('/buyer-overview', 'DashboardController@dashboardBuyer');


        
        //  Admin Resources
        Route::resource('users', 'UserController');
    //    Route::post('users', 'UserController')->name('users.update');
    //    Route::get('user/{id}', 'UserController@profile')->name('user.profile');
    //    Route::get('user/profile', 'UserController@edit')->name('user.edit');
    //    Route::get('/user/profile/{id}', 'UserController@update')->name('user.update');

        Route::resource('partners', 'PartnerController');

        Route::resource('buyers', 'BuyerController');
        Route::POST('/buyers/creates', 'BuyerController@store')->name('create.buyer');
    //    Route::POST('/buyers/edit', 'BuyerController@edit')->name('edit.buyer');

        Route::resource('buyersetup', 'buyersetupController');
        Route::POST('buyersetup/creates', 'buyersetupController@store')->name('create.buyersetup');


        Route::get('buyer/integration', 'BuyerController@integration')->name('integration.buyer');
        Route::POST('buyer/integration', 'BuyerController@integration')->name('integration.buyer');



        Route::get('buyers/integration', 'BuyerController@integration');

        Route::resource('pubbuyers', 'PubbuyermappingController');
        Route::resource('leads', 'LmspaydayukController');
        Route::resource('offers', 'OfferController');
        Route::resource('reports', 'ReportController');
        Route::resource('invoices', 'InvoicesController');

        // Email verification routes
        Route::get('/email/verify', function () {
            return view('auth.verify-email');
        })->middleware('auth')->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();

            return redirect('/home');

        

        
        })->middleware(['auth', 'signed'])->name('verification.verify');

    //    Route::post('/email/verification-notification', function (Request $request) {
    //        $request->user()->sendEmailVerificationNotification();
    //
    //        return back()->with('message', 'Verification link sent!');
    //    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');





    //    //
    //    Route::post('/leads/', 'LMSPaydayUKController@store');
        // Application -> Admin Report Route

        // Application -> Admin Log Route

        // Application -> Admin Report Route

        // *** Partner Dashboard Route ***
        Route::get('/portal', 'DashboardController@dashboardPartner'); // Partner Dashboard


        Route::get('/profile-page/{id}', 'ProfileController@edit')->middleware('verified');
    // Account settings Admin
        Route::get('/account-settings', 'ProfileController@adminProfile'); // admin Profile


        // User Route
        Route::get('/page-users-list', 'UserController@index');
        Route::get('/page-users-view', 'UserController@show');
        Route::get('/page-users-edit', 'UserController@edit');

        // Misc Route
        Route::get('/page-404', 'MiscController@page404');
        Route::get('/page-maintenance', 'MiscController@maintenancePage');
        Route::get('/page-500', 'MiscController@page500');

        Route::fallback(function () {
            return redirect()->back();
        });
    });
});


