<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
   public function getIndex() {
      # process variable data
      # talk to the model
      # recieve from the model
      # compile or process data from the model if needed
      # pass that data to the correct view
      return view('pages/home');
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
   public function getBlogpost() {
      return view('pages/blogpost');
   }
   public function getPosteditor() {
      return view('pages/posteditor');
   }
}
