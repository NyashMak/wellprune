<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPortalController extends Controller
{
    public function adminindex () {

        return view('admin.adminhome');
    }

    // This function returns all blog posts to the Admin Portal 
    public function posts () {

        return view('admin.blog.posts');
    }
    
}
