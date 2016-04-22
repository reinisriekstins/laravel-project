<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials/_head')

   @yield('stylesheets')

   @include('partials/_stylesheets')
</head>

<body>

   @include ('partials/_nav')

   @yield('content')

   @include('partials/_footer')

   @include('partials/_javascript')

   @yield('scripts')

</body>

</html>
