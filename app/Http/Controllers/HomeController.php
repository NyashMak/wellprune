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

    public function resume () {

        return view('resume');
    }

    public function projects () {

        return view('projects');
    }

    public function contact () {

        return view('contact');
    }

    public function editsiteintro () {

        return view('admin.website.introsection');
    }

    public function editsiteabout () {

        return view('admin.website.aboutsection');

    }

    public function editfooter () {

        return view('admin.website.footersection');
    }

    

}
