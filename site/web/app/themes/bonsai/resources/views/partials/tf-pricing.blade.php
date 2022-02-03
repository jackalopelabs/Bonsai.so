<div id="grid" class="container-fluid">
  <div class="py-5 text-center">
    <p class="mb-0 text-primary">Want to sell content on True Fans?</p>
    <h3 class="text-muted">True Fan Memberships and Websites</h3>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-2 pointer" data-toggle="modal" data-target="#signupmodal01">
        {{-- <img class="card-img-top" src="@asset('images/legal-kit.svg')" alt="" class=""> --}}
        <h1 class="text-center mt-5"><i class="fas fa-play text-secondary mr-2"></i></h1>
        <div class="mt-2 card-body">
          <h3>True Fans: Basic</h3>
          <p><span class="badge badge-secondary mr-2">You keep 80%</span> <span class="badge badge-default">Upgrade Anytime</span></p>
          {{-- <p><span class="badge badge-secondary mr-2">23 videos</span> <small class="text-muted">4 hours</small></p> --}}
          <p class="mute mt-3">Get a True Fans Account on this website– quick and easy.</p>
          <p class="text-muted"><small>Ideal for creators making less than $250/m</small></p>
          <ul>
            <li>1 True Fans membership</li>
            <li>3 Product tiers</li>
            <li>Accept Tips <small class="mute">(custom amounts)</small></li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-secondary">Get Basic Account</a>
            </div>
            <p class="h4 mt-3 pl-2"> $50<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>You keep 80% of sales</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-2 pointer gradient-border" id="box" data-toggle="modal" data-target="#signupmodal02">
        {{-- <img class="card-img-top"src="@asset('images/pitch-kit.svg')" alt=""> --}}
        <h1 class="text-center mt-5"><i class="fas fa-house-user text-info mr-2"></i></h1>
        <div class="mt-2 card-body">
          <h3>True Fans: Pro</h3>
          <p><span class="badge badge-secondary">You keep 90%</span> <span class="badge badge-info">Whitelabel</span></p>
          <p class="mute">Get your own basic True Fans website</p>
          <p class="text-muted"><small>Ideal for creators making less than $2,500/m</small></p>
          <ul>
            <li>1 True Fans Website</li>
            <li>3 Product tiers</li>
            <li>Accept Tips <small class="mute">(custom amounts)</small></li>
            <li>Instant Payouts</li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-info">Get Pro Account</a>
            </div>
            <p class="h4 mt-3 pl-2"> $250<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>You keep 90% of sales</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card mx-2 mt-2 pointer" data-toggle="modal" data-target="#signupmodal03">
        {{-- <img class="card-img-top"src="@asset('images/brand-messaging-kit.svg')" alt=""> --}}
        <div class="text-center text-success mt-5" height="80px;">@include('svg.bonsai')</div>
        <div class="mt-2 card-body">
          <h3>True Fans: Sensei</h3>
          <p><span class="badge primary-gradient mr-2">You keep 95% profit</span> <span class="badge badge-info">Whitelabel</span></p>
          <p class="mute">Get an advanced True Fans website</p>
          <p class="text-muted"><small>Ideal for creators making more than $2,500/m</small></p>
          <ul>
            <li>1 True Fans Website</li>
            <li>Unlimited Products</li>
            <li>Accept Tips <small class="mute">(custom amounts)</small></li>
            <li>Instant Payouts</li>
          </ul>
        </div>
        <div class="card-footer p-3">
          <div class="flex-s-b">
            <div class="d-flex">
              <a href="#" class="btn btn-success">Get Sensei Account</a>
            </div>
            <p class="h4 mt-3 pl-2"> $750<span class="text-muted">/m</span></p>
          </div>
          <p class="text-muted text-right mb-0"><small>You keep 95% of sales</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.modals.signup01')
@include('partials.modals.signup02')
@include('partials.modals.signup03')
