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

use App\Http\Controllers;

Route::get('/', 'IndexController@show')->name('show');
Route::get('/home', 'IndexController@home')->name('home');
Route::get('/logout', 'IndexController@logout');

Auth::routes();

//DealController
Route::post('/add-deal', 'admin\DealController@addDeal');
Route::get('/add-deal', 'admin\DealController@addDeal');
Route::get('/deal/{id}', 'admin\DealController@show');

//CategoryController
Route::get('/add-category', 'admin\CategoryController@add');
Route::post('/add-category', 'admin\CategoryController@add');
Route::get('/get-category', 'admin\CategoryController@get');
Route::get('/list-category', 'admin\CategoryController@list');
Route::get('/delete-category/{id}', 'admin\CategoryController@delete');


//ProductController
Route::get('/add-product', 'admin\ProductController@addProduct');
Route::post('/add-product', 'admin\ProductController@addProduct');
Route::get('/get-products/{category_id}', 'admin\ProductController@getProducts');
Route::get('/dashboard','admin\AdminController@showDashboard')->name('dashboard');

Auth::routes();

//HomeController
Route::get('/home', 'HomeController@index')->name('home');


//BetController
Route::get('/add-bet/{id}', 'admin\BetController@add');
Route::get('/auto-bet/{id}', 'admin\BetController@addAuto');