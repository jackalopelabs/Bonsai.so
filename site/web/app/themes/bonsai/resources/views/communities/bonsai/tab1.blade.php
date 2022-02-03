<div class="" id="accordion">
  <h3 class="text-muted small">Categories:</h3>
  <ul class="accordion mb-0">
    <li>
      <a class="toggle card" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-graduation-cap mr-2"></i></small>
        <span class="mr-3">Courses</span>
        <div class="float-right">
          <small class="badge badge-light">2 Courses</small><small class="badge badge-light ml-3">10 Lessons</small>
        </div>
      </a>
      <div class="inner">
        <div class="" id="tab1" role="tabpanel">
          @include('communities.bonsai.courses.main')
        </div>
      </div>
    </li>

    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-font mr-2"></i></small>
        <span class="mr-3">Docs</span>
      </a>
      @query([
      'posts_per_page' => 20,
      'post_type' => 'post',
      'cat' => '9',
      'order' => 'ASC'
      ])

      <ul class="inner mt-3" style="">
        @posts
        <li>
          <a href="" class="toggle card">@title</a>
          <div class="inner">
            @excerpt
            <a href="@permalink" class="btn btn-sm btn-success">Full article <i class="fas fa-arrow-right ml-2 pt-1"></i></a>
          </div>
        </li>
        @endposts
      </ul>
    </li>

    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="far fa-calendar-alt mr-2"></i></small>
        <span class="mr-3">Live Streams</span>
      </a>
      @query([
      'posts_per_page' => 20,
      'post_type' => 'post',
      'cat' => '5'
      ])

      <ul class="inner mt-3" style="">
        @posts
        <li>
          <a href="" class="toggle card">@title <small class="smaller float-right text-muted pt-1">@published('n/j/y')</small></a>
          <div class="inner">
            @excerpt
            <a href="@permalink" class="btn btn-sm btn-success float-right">Full article <i class="fas fa-arrow-right ml-2 pt-1"></i></a>
          </div>
        </li>
        @endposts
      </ul>
    </li>
  </ul>
</div>
