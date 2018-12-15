<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
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
    public function index()
    {
        $breadcrumbs = ['Home','Articles'];
        $sidebar_urls = [
            "Articles"=>"articles",
            "create new article"=>"articles/create"
        ];
        return view('home',compact('articles','breadcrumbs','sidebar_urls'));
    }
}
