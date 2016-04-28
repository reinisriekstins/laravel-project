<?php

namespace App\Http\Controllers;

use App\Post;


class PagesController extends Controller {

   public function getIndex() {
      $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
      return view('pages/home')->withPosts($posts);
   }

   public function getBootstrap() {
      return view('pages/bootstrap');
   }

   public function getSignup() {
      return view('pages/signup');
   }

   public function getSignin() {
      return view('pages/signin');
   }

}
