<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index () {

        return view('home');

    }

    public function bloghome () {

        return view('blog.layouts.partials.home');
    }

    public function blogpost () {

        return view('blog.layouts.partials.post');

    }
    
    public function adminindex () {

        return view('admin.adminhome');
    }
}
