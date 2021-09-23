<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogHomeController extends Controller
{
    public function bloghome () {

        return view('blog.layouts.partials.home');
    }

    public function blogpost () {

        return view('blog.layouts.partials.post');

    }
}
