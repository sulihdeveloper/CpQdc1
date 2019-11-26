<?php

use App\Slide;
use App\news;
use App\Clien;
use App\Post;


Route::get('/', function () {
    $slide = Slide::latest()->paginate(9);
    $news = News::latest()->paginate(6);
    $clien = Clien::latest()->paginate(4);
    $post = Post::latest()->paginate(3);
    $data = [
        'slide' => $slide,
        'news' => $news,
        'clien' => $clien,
        'post' => $post,
    ];
    return view('home',$data);
});



Auth::routes();

Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');
Route::get('/capability', 'HomeController@capability');
Route::get('/contacts', 'HomeController@contacts');

    Route::resource('slide', 'SlideController');
    Route::resource('manage','ManageController',['only'=>['update','destroy','index']],['middleware'=>['checkadmin']]);
    Route::resource('about', 'AboutController',['except' => [
        'destroy','show'
    ]]);
    Route::resource('vision', 'VismisController',['except' => [
        'destroy','show'
    ]]);
    Route::resource('contact', 'ContactController',['except' => [
        'destroy','show'
    ]]);

    Route::resource('carrer', 'CarrerController',['except'=>[
        'destroy','show'
    ]]);
    Route::resource('clien', 'ClienController',['except'=>[
            'destroy','show'
        ]]);

Route::resource('category', 'CategoryController',['except'=>['show']]);
    Route::resource('product', 'ProductController');
    Route::resource('news','NewsController');


Route::resource('profile','ProfileController',['only'=>['edit','update']],['middleware'=>['auth']]);
