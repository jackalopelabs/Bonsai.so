<div id="accordion">
  <div class="card" id="bblock">
    <div class="nav-bar flex-s-b">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">
            <i class="fas fa-book fa-xs mr-2" aria-hidden="true"></i>
            <small class="hidden-md-down text-muted">Courses</small>
          </a>
        </li>
        @guest
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">
              <i class="fas fa-shopping-bag fa-xs mr-2" aria-hidden="true"></i>
              <small class="hidden-md-down text-muted">Checkout</small>
            </a>
          </li>
        @endguest
      </ul>
      <div class="float-right flex-c-c">
        {{-- <a class="flex-col-c ml-2 text-white btn" data-toggle="modal" data-target="#navModal" style="padding:4% 1rem 0;">•••</a> --}}
        <img src="@asset('images/rooms/bonsai.svg')" height="33" alt="Bonsai Group" class="mr-2 pt-2">
      </div>
    </div>
    @include('courses.devs.inner')
  </div>
</div>
