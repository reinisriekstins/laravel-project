@extends('main')

@section('title', " | Sign In")


@section('content')
   <div class="container" id="container1">
      <form class="form-signin">
         <h2 class="form-signin-heading">Please sign in</h2>
         <div class="form-group">
               <input type="email" name="email" id="email" class="form-control input col-md-4" placeholder="Email Address">
         </div>
         <div class="form-group">
               <input type="password" name="password" id="password" class="form-control input col-md-4" placeholder="Password">
         </div>
         <div class="form-group">
            <input type="submit" value="Sign In" class="btn btn-default btn-block btn-lg">
         </div>
      </form>
   </div>
@endsection
