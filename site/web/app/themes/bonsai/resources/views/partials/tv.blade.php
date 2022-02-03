<div class="mt-5 pt-5">
  <h1>Bonsai TV</h1>
  <div class="card">
    <div class="card-body">
      <div class="" id="accordion">
        <h3 class="text-muted small">Categories:</h3>
        <ul class="accordion mb-0">

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

            <ul class="inner mt-3" style="display: block;">
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

          {{-- <li>
            <a class="toggle card show" href="javascript:void(0);">
              <small class="mute uppercase"><i class="far fa-calendar-alt mr-2"></i></small>
              <span class="mr-3">The Story</span>
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
          </li> --}}

        </ul>
      </div>
    </div>
  </div>
</div>
