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
//
Route ::get('/','IndexController@index');
Route ::get('/search','IndexController@search');
Route ::get('/productdetail/{product_id}','BrowseProductController@product');
Route ::get('/compare','CompareController@compare');
Route ::get('/test','test@test');
Route ::get('/category/{category_id}','IndexController@showCates');
Route ::post('/subscription','SubscriptionController@subscribe')->name('subscription')->middleware('auth');
//Route::get('/browse/{name}', '')->name('browse.product');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notifications', 'HomeController@notifications')->name('notifications');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

