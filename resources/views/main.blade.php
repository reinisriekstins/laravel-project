<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials/_head')

   @yield('stylesheets')

   @include('partials/_stylesheets')
</head>

<body>

   @include ('partials/_nav')

   <div class="container">

      {{ Auth::check() ? "Logged In" : "Not Logged In" }}

      @include('partials/_messages')

      @yield('content')

      @include('partials/_footer')

   </div>

   @include('partials/_javascript')

   @yield('scripts')

</body>

</html>
