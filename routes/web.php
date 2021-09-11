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

use App\Http\Controllers\AdminController;

Route::get('/','SiteController@index')->name('home');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::post('/', 'SiteController@store')->name('contact');

Route::get('lamg/{lang}','SiteController@switchLang')->name('lang.switch');

Route::namespace('Admin')->name('admin')->prefix('v-admin')->group(function(){
    Route::get('/', function(){
  return view('admin.index');
    })->name('panel');

});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
