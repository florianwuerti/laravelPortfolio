<header class="header">
  <div class="header__container container">
    <a class="header__brand" href="{{ url('/') }}">
      <span class="header__title">{{ config('app.name', 'Laravel') }}</span>
      <span class="header__subtitle">Web Application Developer</span>
    </a>
    <nav class="nav navbar__primary">
      <ul class="nav__list">
        <li class="nav__item {{ Request::is('admin/dashboard') ? "nav__link-active" : "" }}">
          <a class="nav__link" href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
      </ul>
    </nav><!-- .navbar__primary -->
  </div><!-- .header__container -->
</header>
