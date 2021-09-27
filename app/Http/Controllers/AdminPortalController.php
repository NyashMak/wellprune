<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPortalController extends Controller
{
    public function adminindex () {

        return view('admin.adminhome');
    }

    
}
