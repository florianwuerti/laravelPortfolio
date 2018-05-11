<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">{{ config('app.name', 'Laravel') }}</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="#">Home</a>
          <a class="p-2 text-dark" href="#">About</a>
          <a class="p-2 text-dark" href="#">Project</a>
          <a class="p-2 text-dark" href="#">Contact</a>
        </nav>
        @if (Route::has('login'))
          @auth
              <a href="{{ url('/home') }}">Home</a>
          @else
            <a class="btn btn-outline-primary mr-md-3" href="{{ route('login') }}">Sign up</a>
            <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
          @endauth
        @endif
      </div>
    </body>
</html>
