<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog', ['posts' => $posts]);
    }

}
