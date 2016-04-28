<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
   public function getSingle($slug) {
      // fetch from the database based on slug
      $post = Post::where('slug', '=', $slug)->first();

      // return view and pass in the post object
      return view('blog.single')->withPost($post);
   }
}
