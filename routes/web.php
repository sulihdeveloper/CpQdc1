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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');

    Route::resource('slide', 'SlideController');
    Route::resource('manage','ManageController',['only'=>['update','destroy','index']],['middleware'=>['checkadmin']]);
    Route::resource('about', 'AboutController',['except' => [
        'destroy','show'
    ]]);
    Route::resource('vision', 'VismisController',['except' => [
        'destroy','show'
    ]]);
    Route::resource('category', 'CategoryController',['except'=>['show']]);
    Route::resource('product', 'ProductController');
    Route::resource('contact', 'ContactController',['except'=>['show']]);


Route::resource('profile','ProfileController',['only'=>['edit','update']],['middleware'=>['auth']]);

