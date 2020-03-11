<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', 'siteController@index');

    Route::get('lang/{locale}', 'LocalizationController@index');

    Route::get('/partners', 'siteController@partners');

    Route::get('/help', 'siteController@help');

    Route::get('/using_app', 'siteController@usingApp');

    Route::get('/account_and_payment', 'siteController@accountAndPayment');

    Route::get('/managing_requests', 'siteController@managingRequests');

    Route::get('/privacy_policy', 'siteController@privacyPolicy');

    Route::get('/joining_winch', 'siteController@joiningWinch');

    Route::get('/using_the_app', 'siteController@usingTheApp');

    Route::get('/account_management', 'siteController@accountManagement');

    Route::get('/getting_paid', 'siteController@gettingPaid');

    Route::get('/furniture', 'siteController@furniture');

    Route::get('/transport_goods', 'siteController@transportGoods');

    Route::get('/towing_service', 'siteController@towingService');

    Route::get('/become_captain', 'siteController@becomeCaptain');

    Route::get('/aboutus', 'siteController@aboutus');

    Route::get('/contactus', 'ContactUsController@contactus');

    Route::post('/send', 'siteController@mailContact');

});

    Route::post('/sendemail', 'ContactUsController@send');
