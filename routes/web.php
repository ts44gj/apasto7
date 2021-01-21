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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('customer')->namespace('Customer')->name('customer.')->group(function() {
   Auth::routes();

 Route::get('/home', 'CustomerHomeController@index')->name('customer_home');
});

//post作成画面へ遷移
Route::get('/post/post','PostController@index');

//post作成画面へ遷移
Route::get('/customer/customer_post','PostController@index');

//todoとdiary作成して、画面遷移
Route::post('/customer/customer_post','PostController@post');

//timelineを表示
Route::get('/customer/customer_timeline','PostController@showTimeline')->name('showTimeline');

Route::get('/customer/customer_reservation','ReservationController@index');

Route::get('/customer/customer_aparel','AparelController@index');

