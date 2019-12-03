<?php
use App\Slide;
use App\news;
use App\Clien;
use App\Post;
use App\Category;
use App\Product;


Route::get('/', function () {
    $slide = Slide::latest()->paginate(9);
    $news = News::latest()->paginate(3);
    $clien = Clien::latest()->paginate(4);
    $post = Post::latest()->paginate(3);
    $data = [
        'slide' => $slide,
        'news' => $news,
        'clien' => $clien,
        'post' => $post,
    ];
    return view('home', $data);
});

Route::get('formcarrer',function (){
    $category = Category::latest()->paginate(10);
    $product = Product::latest()->paginate(10);
    $loc = [
      'category' => $category,
      'product' => $product,
    ];
    return view('formcarrer', $loc);
});

Route::get('contacts',function (){
    return view('contacts');
});

Route::get('capability',function (){
    return view('capability');
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
