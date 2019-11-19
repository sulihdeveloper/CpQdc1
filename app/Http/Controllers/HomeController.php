<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;


class HomeController extends Controller
{

    public function index()
    {
        $slide = Slide::paginate(10);
        return view('slide.index', compact('slide'))->with('i');
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
}
