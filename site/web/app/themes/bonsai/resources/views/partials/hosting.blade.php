<div id="grid">

  <div class="row pb-5">
    <div class="col-md-12">
      <div class="card my-2">
        @role('tier_01')
          <p><span class="badge badge-success m-3">Subscribed</span></p>
        @endrole
        <h1 class="text-center mt-5">@php the_field('tier_1_icon', 705); @endphp</h1>
        <div class="mt-2 pb-0 card-body">
          <h3>@php the_field('tier_1_name', 705); @endphp</h3>
          <p><span class="badge badge-secondary mr-2">@php the_field('tier_1_badge', 705); @endphp</span></p>
          <ul class="mb-0">
            @php the_field('tier_1_list', 705); @endphp
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              @guest
                <a href="/@title(5)" class="btn btn-secondary">Learn more..</a>
              @endguest
            </div>
            <p class="h4 mb-0">@php the_field('tier_1_price', 705); @endphp</p>
          </div>
          <p class="text-muted text-right mb-0"><small>@php the_field('tier_1_annual_price', 705); @endphp</small></p>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card my-2 gradient-border" id="box">
        @role('tier_02')
          <p><span class="badge badge-success m-3">Subscribed</span></p>
        @endrole
        <h1 class="text-center mt-5">@php the_field('tier_2_icon', 705); @endphp</h1>
        <div class="mt-2 pb-0 card-body">
          <h3>@php the_field('tier_2_name', 705); @endphp</h3>
          <p><span class="badge badge-info mr-2">@php the_field('tier_2_badge', 705); @endphp</span></p>
          {{-- <p class="mute">Your own Bonsai website</p> --}}
          <ul class="mb-0">
            @php the_field('tier_2_list', 705); @endphp
          </ul>
          {{-- <p class="text-muted mt-3 mb-0"><small>Ideal for communities generating <strong class="">LESS than</strong> $2,500/m</small></p> --}}
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              @guest
                <a href="/@title(5)" class="btn btn-info">Learn more..</a>
              @endguest
            </div>
            <p class="h4 mt-3 pl-2"> $@php the_field('tier_2_price', 705); @endphp<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>@php the_field('tier_2_annual_price', 705); @endphp</small></p>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card my-2">
        @role('tier_03')
          <p><span class="badge badge-success m-3">Subscribed</span></p>
        @endrole
        <div class="text-center text-success mt-5" height="80px;">@php the_field('tier_3_icon', 705); @endphp</div>
        <div class="mt-2 pb-0 card-body">
          <h3>@php the_field('tier_3_name', 705); @endphp</h3>
          <p><span class="badge primary-gradient mr-2">@php the_field('tier_3_badge', 705); @endphp</span></p>
          {{-- <p class="mute">Bonsai with no limits</p> --}}
          <ul class="mb-0">
            @php the_field('tier_3_list', 705); @endphp
          </ul>
          {{-- <p class=" mt-3 mb-0"><small class="text-muted">Ideal for communities generating <strong class="">MORE than</strong> $2,500/m</small></p> --}}
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              @guest
                <a href="/@title(5)" class="btn btn-success">Learn more..</a>
              @endguest
            </div>
            <p class="h4 mt-3 pl-2"> $@php the_field('tier_3_price', 705); @endphp<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>@php the_field('tier_3_annual_price', 705); @endphp</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    @if( get_field('tier_4_name') )
      <div class="col-lg-6 col-md-12">
        <div class="card my-2 pointer" id="box">
          <div class="pb-0 card-body">
            @role('tier_04')
              <p><span class="badge badge-success">Subscribed</span></p>
            @endrole
            <div class="flex-s-b">
              <div class="d-block">
                <h3 class="h5">@php the_field('tier_4_name', 705); @endphp</h3>
                <p class="mute">@php the_field('tier_4_description', 705); @endphp</p>
              </div>
              <div class="">
                <small><p class="text-right text-muted mb-0">Starting at</p></small>
                <p class="h4 pb-4"> $@php the_field('tier_4_price', 705); @endphp<span class="text-muted">/m</span></p>
              </div>
            </div>
            <ul>
              @php the_field('tier_4_list', 705); @endphp
            </ul>
          </div>
        </div>
      </div>
    @endif

    @if( get_field('tier_5_name') )
      <div class="col-lg-6 col-md-12">
        <div class="card my-2 pointer" data-toggle="tooltip" data-placement="top" title="Coming soon..">
          <div class="pb-0 card-body">
            @role('tier_05')
              <p><span class="badge badge-success">Subscribed</span></p>
            @endrole
            <div class="flex-s-b">
              <div class="d-block">
                <h3 class="h5">@php the_field('tier_5_name', 705); @endphp</h3>
                <small><p class="mute">@php the_field('tier_5_description', 705); @endphp</p></small>
              </div>
              <p class="h4 pb-4"> $@php the_field('tier_5_price', 705); @endphp<span class="text-muted">/m</span></p>
            </div>
            <ul>
              @php the_field('tier_5_list', 705); @endphp
            </ul>
          </div>
        </div>
      </div>
    @endif

  </div>
</div>
