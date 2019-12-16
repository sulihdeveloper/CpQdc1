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
    $loc = [
      'category' => $category,
    ];
    return view('formcarrer', $loc);
});

Route::get('contacts',function (){
    return view('contacts');
});

Route::get('/carrer1',function (){
    $product = Product::latest()->paginate(6);
    $category = Category::latest()->paginate(10);
    $dta = [
        'product' => $product,
        'category' => $category,
    ];
    return view('carrer1',$dta);
});

Route::get('capability',function (){
    return view('capability');
});

Route::get('/berita',function (){
    $news = News::latest()->paginate(10);
    $ber = [
        'news' => $news,
    ];
    return view('berita',$ber);
});

Route::get('bout',function (){
    $post = Post::latest()->paginate(3);
    $item =[
        'post' => $post,
     ];
    return view('bout',$item);
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
