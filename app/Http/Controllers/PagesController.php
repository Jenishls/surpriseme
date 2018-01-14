<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return 'INDEX';
        $title = 'Welcome to laravel!!';
        return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);

    }
     
    public function category()
    {
        return view('pages.category');
    }

    public function products()
    {
        return view('pages.products');
    }

}
