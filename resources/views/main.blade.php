<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._nav')
      @yield('content')
    @include('partials._footer')

  </body>
</html>
