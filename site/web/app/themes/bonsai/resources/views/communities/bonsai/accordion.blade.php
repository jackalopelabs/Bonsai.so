<div id="community-block" class="sticky-top">
  <div class="flex-s-b ml-2">
    <h3>@title(19)</h3>
    @include('svg.bonsai')
  </div>
  <div class="flex-s-b my-3 ml-2">
    <div class="d-flex">
      <a href="https://discord.gg/JtPzNQGV5d" target="_blank"><i class="fab fa-discord h5 text-primary pointer"></i></a>
      <a href="https://github.com/jackalopeio" target="_blank"><i class="fab fa-github h5 text-primary pointer ml-3"></i></a>
      <a href="@permalink(19)" target="_blank"><i class="fas fa-expand h5 text-primary pointer ml-3"></i></a>
    </div>
    @role('subscriber')
      <a href="#tab1-3" class="btn btn-sm btn-secondary" style="color: #111;" data-toggle="tab" role="tab">Subscribe<div class="badge badge-secondary text-white ml-2">$15/m</div></a>
    @endrole
    @guest
      <a href="#tab1-4" class="btn btn-sm btn-secondary" style="color: #111;" data-toggle="tab" role="tab">Sign up</a>
    @endguest
  </div>

  <div id="accordion">
    <div class="card" id="bblock">
      <div class="nav-bar flex-s-b">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">
              <small class="hidden-md-down">All Posts</small>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">
              <small class="hidden-md-down">Courses</small>
            </a>
          </li>
          @role('subscriber')
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">
                <small class="hidden-md-down">Pricing</small>
              </a>
            </li>
          @endrole
          @guest
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">
                <small class="hidden-md-down">Sign Up</small>
              </a>
            </li>
          @endguest
        </ul>
        {{-- <div class="float-right flex-c-c">
          <a class="flex-col-c ml-2 text-white btn" data-toggle="modal" data-target="#navModal" style="padding:4% 1rem 0;">•••</a>
        </div> --}}
      </div>
      @include('communities.bonsai.inner')
    </div>
  </div>
  @if (is_single() && 'post' == get_post_type())
    @php next_post_link( '%link', '<button class="btn btn-dark float-right mt-4">Next post <i class="fas fa-arrow-right ml-2"></i></button>', TRUE, '13' ); @endphp
  @endif
</div>
