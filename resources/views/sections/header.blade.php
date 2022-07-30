<header class="bg-nav text-white">
  <a class="mt-5 flex" href="{{ home_url('/') }}">
      <svg class="h-24 w-24" viewBox="0 0 805.86 324"><defs><style>.cls-1{font-size:240px;fill:#d58c3b;font-family:VVDS_Organum-Black, VVDS_Organum;font-weight:800;}.cls-2{letter-spacing:-0.09em;}.cls-3{letter-spacing:-0.02em;}.cls-4{letter-spacing:0.02em;}.cls-5{letter-spacing:-0.05em;}.cls-6{letter-spacing:-0.02em;}</style></defs><text class="cls-1" transform="translate(0 204)"><tspan class="cls-2">F</tspan><tspan class="cls-3" x="140.88" y="0">o</tspan><tspan class="cls-4" x="277.44" y="0">l</tspan><tspan class="cls-5" x="356.16" y="0">k</tspan><tspan class="cls-6" x="513.6" y="0">s</tspan><tspan x="634.08" y="0">y</tspan></text></svg
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
