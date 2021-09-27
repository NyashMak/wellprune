<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogHomeController extends Controller
{
    public function bloghome () {

        $posts = Post::orderByDesc('created_at')->get();

        return view('blog.layouts.partials.home', ['posts'=>$posts]);
    }

    public function blogpost () {

        return view('blog.layouts.partials.post');

    }
}
