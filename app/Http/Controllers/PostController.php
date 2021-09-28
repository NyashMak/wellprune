<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function listadminposts() {

        //returns admin view with a list of all posts in the Posts Table
        // Fistly we will call the Post Model and store all posts in one varaiable using the get() method
        $posts = Post::orderByDesc('created_at')->get();

        // Then we will inject the data into the returning blade as a variable
        return view('admin.blog.posts', ['posts'=> $posts]);

    }

    public function addpost() {
        //returns view with form to add a new post to the Posts Table
        return view('admin.blog.addpost');
    }

    public function createpost() {
        //handles action from the newpost form to create new post and store in DB
    }

    public function editpost () {
        // returns view with form to update post
    }

    public function updatepost () {
        // handles action from edit post form to update the selected post in the Posts Table
    }

    public function deletepost () {
        // handles action to delete the selected post from the DB entirely
    }

}
