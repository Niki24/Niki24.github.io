<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class BlogController extends Controller
{
    public function index(){

    	$posts = Post::with('author')->latest()->paginate(3);

    	return view("blog.index", compact('posts'));
    }

    public function show(Post $post)
    {

    	return view("blog.show", compact('post'));
    }
}
