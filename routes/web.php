<?php

use App\Lowker;
use App\news;
use App\Clien;
use App\Post;
use App\Capability;

Auth::routes();

Route::get('/', function () {
    $news = News::latest()->paginate(3);
    $clien = Clien::latest()->paginate(20);
    $post = Post::latest()->paginate(3);
    $capability = Capability::latest()->paginate(10);
    $data = [
        'news' => $news,
        'clien' => $clien,
        'post' => $post,
        'capability' => $capability,
    ];
    return view('home', $data);
});

Route::get('bout',function (){
    $post = Post::latest()->paginate(3);
    $item =[
        'post' => $post,
    ];
    return view('bout',$item);
});

Route::get('capabilities',function (){
    $capability = Capability::latest()->paginate(10);
    $capa =[
      'capability' => $capability,
    ];
    return view('capabilities',$capa);
});

Route::get('/view_berita/{id}',function ($id){
    $news = News::where('id', $id)->paginate();
    $new = [
        'news' => $news
    ];
    return view('view_berita',$new);
});


Route::get('/formcarrer',function (){
    $lowker = Lowker::latest()->paginate(10);
    $loc = [
     'lowker'=> $lowker,
    ];
    return view('formcarrer', $loc);
});


Route::get('/berita',function (){
    $news = News::latest()->paginate();
    $ber = [
        'news' => $news,
    ];
    return view('berita',$ber);
});


Route::get('/view_carrer/{id}',function ($id){
    $lowker = Lowker::where('id', $id)->paginate(10);
    $dta = [
        'lowker' => $lowker
        ];
    return view('view_carrer',$dta);
});

Route::get('contacts',function (){
    return view('contacts');
});

    Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');

    Route::resource('profile','ProfileController',['only'=>['edit','update']],['middleware'=>['auth']]);

    Route::resource('manage','ManageController',['only'=>['update','destroy','index']],['middleware'=>['checkadmin']]);

    Route::resource('about', 'AboutController')->only(['index','edit', 'update',]);

    Route::resource('carrer', 'CarrerController')->only(['index', 'store', 'edit', 'update', 'destroy']);

    Route::resource('clien', 'ClienController')->only(['index','create', 'store', 'edit', 'update','destroy']);

    Route::resource('news', 'NewsController')->only(['index','create','show', 'store', 'edit', 'update', 'destroy']);

    Route::resource('/lowker','LowkerController')->only(['index','create', 'store', 'edit', 'update', 'destroy']);

    Route::resource('contact', 'ContactController')->only(['index', 'create','store', 'edit', 'update', 'destroy']);

    Route::resource('capability', 'CapabilityController')->only(['index','create','show', 'store', 'edit', 'update', 'destroy']);
