<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       /* $post = new BlogPost();
        $post->title = 'My fourth Post';
        $post->body = 'My fourth post Body';
        $post->save();*/
      $posts = BlogPost::all();
        return view('posts', ['posts' => $posts]);
   }
}
