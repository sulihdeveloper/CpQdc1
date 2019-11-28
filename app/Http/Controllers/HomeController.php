<?php

namespace App\Http\Controllers;

use App\Post;
use http\Client;
use Illuminate\Http\Request;
use App\slide;
use App\news;
use App\Clien;


class HomeController extends Controller
{

    public function index()
    {
        $slide = Slide::latest()->paginate(10);
        $news = News::latest()->paginate(6);
        $clien = Clien::latest()->paginate(10);
        $post = Post::where('page',1)->get();
    return view ('home',compact('clien','contacts','news'));
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
    public function formcarrer()
    {
        return view('formcarrer');
    }
}
