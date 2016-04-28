
@extends('main')

@section('title', " | Home")

@section('content')
   <div class="row">

       <!-- Blog Entries Column -->
       <div class="col-md-8">
          <div class="row">
             <div class="col-sm-9">
                <h1 class="page-header">
                    Blog Author
                    <small>All blog posts</small>
                </h1>
             </div>
             <div class="col-sm-3">
                <a href="/posts/create" class="btn btn-primary btn-block btn-lg page-header">Create Post</a>
             </div>
          </div>


          <!-- Blog Posts -->
          @foreach ($posts as $post)
          <h2>{{ $post->title }}</h2>
          <p><span class="glyphicon glyphicon-time"></span> {{ date('H:m M j, Y', strtotime($post->created_at)) }}</p>

          <p align="justify">{{substr($post->body, 0, 750) }}{{ strlen($post->body) > 50 ? "..." : ""}}</p>
          <a class="btn btn-primary" href="blog/{{$post->slug}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
          @endforeach
         <hr>

         <div class="text-center">
            <!-- paginator -->
         </div>

       </div>

       <!-- Blog Sidebar Widgets Column -->
       <div class="col-md-4">

           <!-- Blog Search Well -->
           <div class="well">
               <h4>Blog Search</h4>
               <div class="input-group">
                   <input type="text" class="form-control" placeholder="Search this blog">
                   <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                         <span class="glyphicon glyphicon-search"></span>
                      </button>
                   </span>
               </div>
               <!-- /.input-group -->
           </div>

           <!-- Blog Categories Well -->
           <div class="well">
               <h4>Blog Categories</h4>
               <div class="row">
                   <div class="col-lg-6">
                       <ul class="list-unstyled">
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                       </ul>
                   </div>
                   <!-- /.col-lg-6 -->
                   <div class="col-lg-6">
                       <ul class="list-unstyled">
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                           <li><a href="#">Category Name</a>
                           </li>
                       </ul>
                   </div>
                   <!-- /.col-lg-6 -->
               </div>
               <!-- /.row -->
           </div>

           <!-- Side Widget Well -->
           <div class="well">
               <h4>Side Widget Well</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
           </div>

       </div>

   </div>
   <!-- login buttons -->
   <!-- /.row -->
   <!--div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="/signin">Sign in</a></button>
      </div>
   </div>
   <div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="/signup">Sign up</a></button>
      </div>
   </div-->
@endsection
