@extends('main')

@section('title', " | Create Post")

@section('stylesheets')
   {!! Html::style('css/parsley.css') !!}

   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('content')
      <div class="col-md-offset-2 col-md-8">
         <h1>Create New Post</h1>
         <hr>
         {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('slug', 'Slug: ') }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'pattern' => '[\w\d\-\_]+']) }}

            {{ Form::label('body', 'Body: ') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block btn-margin-top')) }}
         {!! Form::close() !!}
         <hr>
         <!-- Summernote text editor -->
         <!--div id="summernote"></div-->
      </div>
@endsection

@section('scripts')
   {!! Html::script('js/parsley.js') !!}

   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js">
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
