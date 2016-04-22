
@extends('main')

@section('title', " | Home")

@section('content')
<!-- Login form -->
<div class="container">
   <div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="/signin">Sign in</a></button>
      </div>
   </div>
   <div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="/signup">Sign up</a></button>
      </div>
   </div>
</div>
@endsection
