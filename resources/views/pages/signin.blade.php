@extends('main')

@section('title', " | Sign In")

@section('content')
      <form class="form-signin">
         <h2 class="form-signin-heading">Please sign in</h2>

         <input type="email" name="email" id="email" class="form-control input" placeholder="Email Address">

         <input type="password" name="password" id="password" class="form-control input" placeholder="Password">

         <div class="form-group">
         <input type="submit" value="Sign In" class="btn btn-default btn-block btn-lg">
         </div>
      </form>
@endsection
