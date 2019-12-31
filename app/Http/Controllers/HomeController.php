<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\slide;
use App\news;
use App\Clien;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index($id)
    {
        $slide = Slide::latest($id)->paginate(10);
        $news = News::latest($id)->paginate(6);
        $clien = Clien::latest($id)->paginate(10);
        $post = Post::where('page',1)->get();
        $category = formcarrer::latest($id)->paginate();
    return view ('home',compact('clien','contacts','news','formcarrer'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardV1()
    {
        return view('templates.dashboard-v1');
    }
    public function capability()
    {
        return view('capability');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function berita()
    {
        $news = News::latest()->paginate(10);
        return view('berita');
    }

    public function bout()
    {
        $post = Post::where('page',1)->get();
        return view('bout');
    }
    public function formcarrer($id)
    {
        $category = Category::latest($id)->paginate(10);
        return view('formcarrer');
    }
    public function view_carrer($id)
    {
        $category = Category::latest($id)->paginate(10);
        $product = Product::latest($id)->paginate(10);
        return view('view_carrer');
    }

    public function view_berita($id)
    {
        $news = News::where('id', $id)->firstOrFail();
        return view('view_berita',compact(['news'=> $news]));

    }
}
