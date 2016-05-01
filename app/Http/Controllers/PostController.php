<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use Validate;

class PostController extends Controller
{
   public function __construct () {
      $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creates a variable and stores all the blog posts in it
         $posts = Post::orderBy('id', 'desc')->paginate(10);
        // returns a view and passes the created variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate the data
         $this->validate ($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha-dash|min:5|max:255|unique:posts,slug',
            'body' => 'required'
         ));


         // store in the database
         $post = new Post;
         $post->title = $request->title;
         $post->body = $request->body;
         $post->slug = $request->slug;
         $post->save();

         Session::flash('success', 'The post has been successfully saved!');

         // redirect to another page
         return redirect()->route("blog.single", $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = Post::find($id);
        return view('posts.show')->with('post', $post);
        //return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // finds the post in the database and savse it as a variable
      $post = Post::find($id);
      // returns the view and passes the var into it
      return view ('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validates the data
         $post = Post::find($id);
         if ($request->input('slug') == $post->slug) {
            $this->validate ($request, array(
               'title' => 'required|max:255',
               'body' => 'required'
            ));
         }
         else {
            $this->validate ($request, array(
               'title' => 'required|max:255',
               'slug' => 'required|alpha-dash|min:5|max:255|unique:posts,slug',
               'body' => 'required'
            ));
         }

        // saves the data to the database
         $post = Post::find($id);
         $post->title = $request->input('title');
         $post->body = $request->input('body');
         $post->slug = $request->input('slug');
         $post->save();
        //sets flash data with success message
        Session::flash('success', 'This post has been succesfully saved!');

        //redirects with flash data to posts.show
        return redirect()->route('blog.single', $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // deletes the post
      $post = Post::find($id);
      $post->delete();

      // displays success message
      Session::flash('success', 'The post was successfully deleted!');
      // redirects to posts index
      return redirect()->route('posts.index', $post->id);
    }
}
