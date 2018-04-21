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


// All routes are localized
Route::get('/', 'HomeController@index');

Route::get('/changeLocale', function () {
    if (App::isLocale('en')) {
        Session::put('applocale', 'ta');
    } else {
        Session::put('applocale', 'en');
    }
    return back();
});