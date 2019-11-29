<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class FormcarrerController extends Controller
{
    public function index()
    {
        return view('formcarrer');
    }
}
