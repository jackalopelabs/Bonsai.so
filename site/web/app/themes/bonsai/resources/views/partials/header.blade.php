<header class="banner py-3" id="nav">
  <div class="mx-5 flex-s-b-c">
    <a class="brand" href="{{ home_url('/') }}">
      @include('svg.bonsai')
    </a>

    <div class="">
      <div class="menu flex-c-c">
        <div class="nav-md row">
          <ul id="menu-primary-nav" class="nav hidden-xs-flex">
            <li class="pt-0"><a href="/@title(134)">@title(134)</a></li>
            <li class="pt-0"><a href="/@title(5)">@title(5)</a></li>
            <li class="pt-0"><a href="/@title(6)">@title(6)</a></li>
            <li class="pt-0"><a href="/@title(7)">@title(7)</a></li>
          </ul>
          @guest
            <a href="" class="btn btn-sm btn-success px-3 ml-3 text-white login-btn" data-toggle="modal" data-target="#dashboardModal">
              Login <i class="fas fa-sign-in-alt ml-2"></i>
            </a>
          @endguest

          @user
            <a href="" class="btn btn-sm btn-success px-3 ml-3 text-white" style="padding-top: 11px !important;" data-toggle="modal" data-target="#dashboardModal">
              Dashboard @fas('tachometer-alt', 'ml-2')
            </a>
          @enduser

          <div class="dropdown menu-item menu-studies ml-3 show">
            <button class="nav-link clickable btn" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">•••</button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="/@title(134)">@title(134)</a>
              <a class="dropdown-item" href="/@title(5)">@title(5)</a>
              <a class="dropdown-item" href="/@title(6)">@title(6)</a>
              <a class="dropdown-item" href="/@title(7)">@title(7)</a>
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
