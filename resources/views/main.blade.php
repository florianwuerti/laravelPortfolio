<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
  </head>
  <body>
    @if (Request::is('admin/*'))
      @include('partials.admin._nav')
    @else
      @include('partials._nav')
    @endif
      @yield('content')
    @include('partials._footer')
  </body>
</html>
