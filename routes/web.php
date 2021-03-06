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



Route::get('/','SiteController@index')->name('home');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::post('/', 'SiteController@store')->name('contact');

Route::get('lang/{lang}','SiteController@switchLang')->name('lang.switch');

Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('v-admin')->group(function(){
   Route::get('/','AdminController@index')->name('dashboard');
    Route::resource('/feedback','FeedbackController');
    Route::resource('/bot','AdminbotController');

   
});



Auth::routes([
    'register'=>false
]);

// Route::get('/home', 'HomeController@index')->name('home');
