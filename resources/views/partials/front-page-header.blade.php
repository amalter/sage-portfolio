<header class="banner home-header jumbotron jumbotron-fluid text-center row">
  <div class="home-header_container container my-auto">
    <a class="home-header_container-brand brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="home-header_container-nav nav-primary">
      @if (has_nav_menu('home_navigation'))
        {!! wp_nav_menu(['theme_location' => 'home_navigation', 'menu_class' => 'nav flex-column home-header_container-nav_ul']) !!}
      @endif
    </nav>
  </div>
</header>
    
