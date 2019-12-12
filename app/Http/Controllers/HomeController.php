<?php

namespace App\Http\Controllers;

use App\Post;
use http\Client;
use Illuminate\Http\Request;
use App\slide;
use App\news;
use App\Clien;
use App\Category;
use App\Product;

class HomeController extends Controller
{

    public function index()
    {
        $slide = Slide::latest()->paginate(10);
        $news = News::latest()->paginate(6);
        $clien = Clien::latest()->paginate(10);
        $post = Post::where('page',1)->get();
        $category = formcarrer::latest()->paginate();
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
        return view('berita');
    }
    public function bout()
    {
        $post = Post::where('page',1)->get();
        return view('bout');
    }
    public function formcarrer()
    {
        $category = Category::latest()->paginate(10);
        return view('formcarrer');
    }
    public function carrer1($id)
    {
        DB::table('product')->where('id', $id)->show();
        $product = Product::latest()->paginate(10);
        return view('carrer1');
    }

}
