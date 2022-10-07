<header class="banner py-3" id="nav">
  <div class="mx-5 flex-s-b-c">
    <a class="brand" href="{{ home_url('/') }}">
      @php the_field('logo', 'option'); @endphp
    </a>

    <div class="">
      <div class="menu flex-c-c">
        <div class="nav-md row">
          <ul id="menu-primary-nav" class="nav hidden-xs-flex">
            @if( get_field('navbar_page_1', 'option') )
              <li class="pt-0"><a href="/@title(671)">@title(671)</a></li>
            @endif
            @if( get_field('navbar_page_2', 'option') )
              <li class="pt-0"><a href="/@title(5)">@title(5)</a></li>
            @endif
            @if( get_field('navbar_page_3', 'option') )
              <li class="pt-0"><a href="/@title(6)">@title(6)</a></li>
            @endif
            @if( get_field('navbar_page_4', 'option') )
              <li class="pt-0"><a href="/grants">Grants</a></li>
            @endif
          </ul>
          @guest
            <a href="" class="btn btn-sm btn-success px-3 ml-3 text-white login-btn" data-toggle="modal" data-target="#dashboardModal">
              Log in <i class="fas fa-sign-in-alt ml-2"></i>
            </a>
          @endguest

          @user
            <a href="" class="btn btn-sm btn-success px-3 ml-3 text-white" style="padding-top: 11px !important;" data-toggle="modal" data-target="#dashboardModal">
              Dashboard @fas('tachometer-alt', 'ml-2')
            </a>
          @enduser

          <div class="btn-group">
            <a class="nav-link clickable btn" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-center mute mb-0 pt-3">•••</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
              @if( get_field('navbar_page_1', 'option') )
                <a class="dropdown-item" href="/@title(134)">@title(134)</a>
              @endif
              @if( get_field('navbar_page_2', 'option') )
                <a class="dropdown-item" href="/@title(5)">@title(5)</a>
              @endif
              @if( get_field('navbar_page_3', 'option') )
                <a class="dropdown-item" href="/@title(6)">@title(6)</a>
              @endif
              @if( get_field('navbar_page_4', 'option') )
                <a class="dropdown-item" href="/@title(7)">@title(7)</a>
              @endif
              @user
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/wp/wp-login.php?action=logout">Logout</a>
              @enduser
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</header>

{{-- <div id="navCornerCta" class="mt-5 fixed-bottom mr-4 hidden-xs" style="left: inherit;">
  <div class="mb-5 ml-5">
    <div class="text-center card active ml-5 pt-2 pb-1" id="timer" style="">
        <div id="days"></div>
        <div id="hours"></div>
        <div id="minutes"></div>
        <div id="seconds"></div>
    </div>
    <div class="mt-2">
      @include('partials.components.date')
    </div>
    <a href="" class="btn btn-sm btn-success px-4 py-2 mt-2 ml-3" data-toggle="modal" data-target="#enrollModal">
      Get Pro Access
      <i class="fas fa-arrow-right ml-1"></i>
    </a>
  </div>
</div> --}}
