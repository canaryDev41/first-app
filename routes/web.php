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

Route::redirect('/', '/dashboard');


Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('/category', 'CategoryController')->except('show');

    Route::resource('/profile', 'ProfileController')->except('show');

    Route::resource('/product', 'ProductController');

});

Route::get('/home', 'HomeController@index')->name('home');
