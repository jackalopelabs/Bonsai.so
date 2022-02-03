<div id="grid" class="mt-5">
  <h3 class="text-center mute h4 mb-0">Select a Membership Level</h3>
  <p class="text-muted text-center uppercase"><small>Start Your Own NFT Community</small></p>
  <div class="row">
    <div class="col-lg-4 col-md-12">
      <div class="card my-2 pointer" data-toggle="modal" data-target="#signupmodal01">
        <h1 class="text-center mt-5"><i class="fas fa-play text-secondary"></i></h1>
        <div class="mt-2 pb-0 card-body">
          <h3>Starter Plan</h3>
          <p><span class="badge badge-secondary mr-2">Hosted on Bonsai</span></p>
          <p class="mute mt-3">Create a private community in minutes</p>
          <ul class="mb-0">
            <li>1 Community</li>
            <li>1 Membership Tier</li>
            <li>Up to 100 Members</li>
            <li>Bonsai University <small class="badge badge-secondary">2 Courses</small></li>
            <li>Bonsai Discord</li>
          </ul>
          <p class=" mt-3 mb-0"><small class="text-muted">Ideal if you're just starting a community</small></p>
        </div>
        <div class="card-footer px-3 py-2">
          <div class="flex-s-b mt-2">
            <div class="d-flex">
              <a href="#" class="btn btn-secondary">Pre-order</a>
            </div>
            <p class="h4 mb-0"> $50<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>Coming Q2 of 2022</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="card my-2 pointer gradient-border" id="box" data-toggle="modal" data-target="#signupmodal02">
        <h1 class="text-center mt-5"><i class="fas fa-house-user text-info mr-2"></i></h1>
        <div class="mt-2 pb-0 card-body">
          <h3>Pro Plan</h3>
          <p><span class="badge badge-info">Custom Domain</span></p>
          <p class="mute">Your own Bonsai website</p>
          <ul class="mb-0">
            <li class="text-success">Custom Domain</li>
            <li>1 Community</li>
            <li>3 Admins</li>
            <li>3 Membership Tiers</li>
            <li>Up to 500 Members</li>
            <li>Bonsai University <small class="badge badge-secondary">2 Courses</small></li>
            <li>Bonsai Discord</li>
            <li>Chat Support</li>
            <li>Basic Analytics</li>
          </ul>
          <p class="text-muted mt-3 mb-0"><small>Ideal for communities generating <strong class="">LESS than</strong> $2,500/m</small></p>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b mt-2">
            <div class="d-flex">
              <a href="#" class="btn btn-info">Sign up</a>
            </div>
            <p class="h4 mt-3 pl-2"> $250<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>6/10 available in Q1 2022</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="card my-2 pointer" data-toggle="modal" data-target="#signupmodal03">
        {{-- <img class="card-img-top"src="@asset('images/brand-messaging-kit.svg')" alt=""> --}}
        <div class="text-center text-success mt-5" height="80px;">@include('svg.bonsai')</div>
        <div class="mt-2 pb-0 card-body">
          <h3>Sensei Plan</h3>
          <p><span class="badge primary-gradient mr-2">Unlimited Everything</span></p>
          <p class="mute">Bonsai with no limits</p>
          <ul class="mb-0">
            <li class="text-primary">Custom Domain</li>
            <li>Unlimited Communities</li>
            <li>Unlimited Admins</li>
            <li>Unlimited Membership Tiers</li>
            <li>Unlimited Products</li>
            <li>Unlimited Members</li>
            <li>Bonsai University <small class="badge badge-secondary">2 Courses</small></li>
            <li>Bonsai Discord</li>
            <li>24/7 Chat Support</li>
            <li>Advanced Analytics</li>
          </ul>
          <p class=" mt-3 mb-0"><small class="text-muted">Ideal for communities generating <strong class="">MORE than</strong> $2,500/m</small></p>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b mt-2">
            <div class="d-flex">
              <a href="#" class="btn btn-success">Sign up</a>
            </div>
            <p class="h4 mt-3 pl-2"> $750<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>5/5 available in Q1 2022</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.modals.signup01')
@include('partials.modals.signup02')
@include('partials.modals.signup03')
