<header class="main-header banner">
  <div class="main-header_container container">
    <div class="main-header_container--logo">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <nav class="navbar main-header_container--nav" role="navigation">
      <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse nav-primary ml-auto"  id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav ml-auto']) !!}
        @endif
      </div>
      <!-- <form class="form-inline collapse navbar-collapse pull-right">
      <button class="btn btn-outline-success" type="button">Main button</button>
      </form> -->
    </nav>

  </div>
</header>
