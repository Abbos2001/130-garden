<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('kids/index');

    }
    public function about()
    {
        return view('kids/about');
    }
    public function galery()
    {
        return view('kids/galery');
    }
    public function contact()
    {
        return view('kids/contact');
    }
}
