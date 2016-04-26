
@extends('main')

@section('title', " | Blog")

@section('content')
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    ?Blog Author?
                    <small>All blog posts</small>
                </h1>

                <!-- Blog Posts -->
                @foreach ($posts as $post)
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span> {{ date('H:m M j, Y', strtotime($post->created_at)) }}</p>

                <p>{{substr($post->body, 0, 300) }}{{ strlen($post->body) > 50 ? "..." : ""}}</p>
                <a class="btn btn-primary" href="/posts/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                @endforeach

               <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

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
        <!-- /.row -->
@endsection
