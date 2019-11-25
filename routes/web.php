<?php

use App\Slide;
use App\news;
use App\Clien;
use App\Post;

$query = "SELECT * FROM slide ORDER BY created_at DESC";
$query = "SELECT * FROM news ORDER BY created_at DESC";
$query = "SELECT * FROM clien ORDER BY created_at DESC";
$query = "SELECT * FROM post ORDER BY created_at DESC";

Route::get('/', function () {
    $slide = Slide::paginate(1);
    $news = News::paginate(9);
    $clien = Clien::paginate(12);
    $post = Post::paginate(3);
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
