<h3>@title(24)</h3>

<div class="flex-s-b my-3">
  <div class="d-flex">
    <a href="https://discord.gg/JtPzNQGV5d" target="_blank"><i class="fab fa-discord h5 text-primary pointer"></i></a>
    <a href="https://github.com/jackalopeio" target="_blank"><i class="fab fa-github h5 text-primary pointer ml-3"></i></a>
    <a href="/bonsai-speed-run/"><i class="fas fa-expand h5 text-primary pointer ml-3"></i></a>
  </div>
  @guest
    <a href="#tab3-4" class="btn btn-sm btn-secondary pt-1" style="color: #111;" data-toggle="tab" role="tab">Access @title(24) <div class="badge badge-secondary text-white ml-2">$15/m</div></a>
  @endguest
</div>

{{-- <div id="calendar"></div> --}}

<div class="" id="accordion">

  {{-- <small class="badge badge-light">3 Modules</small> <small class="badge badge-light ml-2">20 Lessons</small> --}}

  <ul class="accordion mb-0">
    <li>
      <a class="toggle card" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-power-off mr-2"></i></small>
        <span class="mr-4">Start Here</span>
        {{-- <div class="float-right d-flex">
          <span class="badge badge-light hidden-xs">Intro</span>
        </div> --}}
      </a>
      <ul class="inner mt-3" style="">
        @posts(28)
            @excerpt
        @endposts
      </ul>

    </li>

    @include('communities.bonsai.courses.main')

    <small class="text-muted">Extras:</small>
    <li class="mt-0">
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-font mr-2"></i></small>
        <span class="mr-3">Docs</span>
        <div class="float-right d-flex">
          <span class="badge badge-success mr-2 hidden-xs">Free</span>
          <span class="badge badge-light hidden-xs">12 articles</span>
        </div>
      </a>
      @query([
      'posts_per_page' => 20,
      'post_type' => 'post',
      'cat' => '2',
      'order' => 'ASC'
      ])

      <ul class="inner mt-3" style="">
        @posts
        <li>
          <a href="" class="toggle card">@title</a>
          <div class="inner">
            @excerpt
            <a href="@permalink" class="btn btn-sm btn-success float-right">Full article <i class="fas fa-arrow-right ml-2 pt-1"></i></a>
          </div>
        </li>
        @endposts
      </ul>
    </li>

    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="far fa-calendar-alt mr-2"></i></small>
        <span class="mr-3">Live Streams</span>
        <div class="float-right d-flex">
          <span class="badge badge-success mr-2 hidden-xs">Free</span>
          <span class="badge badge-light hidden-xs">78 videos</span>
        </div>
      </a>
      @query([
      'posts_per_page' => 20,
      'post_type' => 'post',
      'cat' => '5'
      ])

      <ul class="inner mt-3" style="">
        @posts
        <li>
          <a href="" class="toggle card">@title</a>
          <div class="inner">
            @excerpt
            <a href="@permalink" class="btn btn-sm btn-success float-right">Full article <i class="fas fa-arrow-right ml-2 pt-1"></i></a>
          </div>
        </li>
        @endposts
      </ul>
    </li>

  </ul>

  {{-- <iframe style="border: 0; box-shadow: none; width: 100%; height: 80vh;" src="https://hdy.circle.so/c/test?iframe=true"></iframe> --}}

</div>
