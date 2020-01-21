<?php

namespace App\Http\Controllers;

use App\Lowker;
use App\Post;
use App\news;
use App\Clien;
use App\Capability;
use Illuminate\Http\Request;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index($id)
    {
        $news = News::latest($id)->paginate(6);
        $clien = Clien::latest($id);
        $post = Post::where('page',1)->get();
        $capability = Capability::latest()->paginate(6);
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
     * @return Response
     */
    public function dashboardV1()
    {
        return view('templates.dashboard-v1');
    }
    public function capabilities($id)
    {
       $capability = Capability::latest($id)->paginate(6);
       return view('capabilities', compact('capability'));
    }

    public function contacts()
    {
        return view('contacts');
    }
    public function berita()
    {
        $news = News::latest()->paginate(9);
        return view('berita');
    }

    public function bout()
    {
        $post = Post::where('page',1)->get();
        return view('bout');
    }
    public function formcarrer($id)
    {
        $lowker = Lowker::latest($id)->paginate(9);
        return view('formcarrer');
    }
    public function view_carrer($id)
    {
        $lowker = Lowker::where('id',$id)->firstOrFail();
        return view('view_carrer',compact(['lowker'=> $lowker]));
    }

    public function view_berita($id)
    {
        $news = News::where('id', $id)->firstOrFail();
        return view('view_berita',compact(['news'=> $news]));

    }
}
