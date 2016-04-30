
@extends('main')

@section('title', " | Blog")

@section('content')
        <div class="row">

           <div class="row">
             <div class="col-md-10">
                 <h1>All blog posts</h1>
             </div>
             <div class="col-md-2">
                 <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-margin-top">Create New Post</a>
             </div>
             <hr>
           </div> <!-- End of row -->
           <div class="row">
             <div class="col-md-12">
                 <table class="table">
                    <thead>
                       <th>#</th>
                       <th>Title</th>
                       <th>Body</th>
                       <th>Created At</th>
                       <th></th>
                    </thead>
                    <tbody>
                       @foreach ($posts as $post)
                          <tr>
                             <th>{{ $post->id }}</th>
                             <td>{{ $post->title }}</td>
                             <td>{{ substr($post->body, 0, 75) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                             <td>{{ date('H:m M j, Y', strtotime($post->created_at)) }}</td>
                             <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                          </tr>
                       @endforeach
                    </tbody>
                 </table>
             </div>
             <div class="text-center">
               {{ $posts->links() }}
            </div>
           </div>

        </div>
        <!-- /.row -->
@endsection
