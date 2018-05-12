<header class="header">
  <div class="header__container container">
    <a class="header__brand" href="{{ url('/') }}">
      <span class="header__title">{{ config('app.name', 'Laravel') }}</span>
      <span class="header__subtitle">Web Application Developer</span>
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
    </nav><!-- .navbar__primary -->
  </div><!-- .header__container -->
</header>
