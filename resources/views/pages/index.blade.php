
@extends('main')

@section('title', " | Home")

@section('content')
   <!-- login buttons -->
   <!-- /.row -->
   <div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="login">Log In</a></button>
      </div>
   </div>
   <div class="row">
      <div class="col-md-offset-4 col-md-4">
         <button class="btn btn-lg btn-default btn-block" type="button"><a href="register">Register</a></button>
      </div>
   </div>
@endsection
