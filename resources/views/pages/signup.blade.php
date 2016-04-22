@extends('main')

@section('title', " | Sign Up")


@section('content')
      <form class="form-signin">
            <h2 class="form-signin-heading">Fill in all of the fields</h2>
            <input type="text" name="first_name" id="first_name" class="form-control input" placeholder="First Name">

            <input type="text" name="last_name" id="last_name" class="form-control input" placeholder="Last Name">

            <input type="email" name="email" id="email" class="form-control input" placeholder="Email Address">

            <input type="password" name="password" id="password" class="form-control input" placeholder="Password">

            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input" placeholder="Confirm Password">

            <input type="submit" value="Create account" class="btn btn-default btn-block btn-lg">

      </form>
@endsection
