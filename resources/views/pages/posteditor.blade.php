@extends('main')

@section('title', " | Create Post")

@section('stylesheets')
   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('content')
   <div class="container">
      <div class="col-md-offset-2 col-md-8">
         <form action="" class="postedit">

            <h1>Create New Post</h1>
            <hr>
            <p><b>Title:</b></p>
            <input type="text" class="form-control">
            <hr>
            <p><b>Body:</b></p>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            <hr>
            <input type="submit" value="Post" class="btn btn-default btn-block btn-lg">

         </form>
         <hr>
         <!-- Summernote text editor -->
         <div id="summernote"></div>
      </div>
   </div>
@endsection

@section('scripts')
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
   <script>
   $(document).ready(function() {
      $('#summernote').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
});
   });
   </script>
@endsection
