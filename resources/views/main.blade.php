<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ config('app.name', 'Laravel') }} - Application Developer</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <header class="header">
        <div class="header__container container">
          <a class="header__brand" href="{{ url('/') }}">
            <span class="header__title">{{ config('app.name', 'Laravel') }}</span>
            <span class="header__subtitle">Application Developer</span>
          </a>
          <nav class="nav navbar__primary">
            <ul class="nav__list">
              <li class="nav__item {{ Request::is('project') ? "nav__link-active" : "" }}">
                <a class="nav__link" href="{{ url('project') }}">Project</a>
              </li>
              <li class="nav__item {{ Request::is('about-us') ? "nav__link-active" : "" }}">
                <a class="nav__link" href="{{ url('about-us') }}">About</a>
              </li>
              <li class="nav__item {{ Request::is('contact') ? "nav__link-active" : "" }}">
                <a class="nav__link" href="{{ url('contact') }}">Contact</a>
              </li>
              @if (Route::has('login'))
                @auth
                  <li class="nav__item {{ Request::is('dashboard') ? "nav__link-active" : "" }}">
                    <a class="nav__link" href="{{ url('dashboard') }}">Dashboard</a>
                  </li>
                @endauth
              @endif
            </ul>
          </nav>
        </div>
      </header>
        @yield('content')
    </body>
</html>
