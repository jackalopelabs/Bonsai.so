<div class="text-center">
  <div class="text-c-sm">
    <h6 class="uppercase mute text-spaced pt-5"><span class="text-success">Bonsai</span></h6>
    <h1 class="hero-header">Pre-Seed Funding</h1>
  </div>
</div>

<div class="hero hero-homepage container flex-col-c flex-c-c mt-5">
  <div class="" style="margin: 0 -18px -40px 0;z-index:11;">
    @include('svg.bonsai.big-bonsai')
  </div>
  <div class="card mx-auto active" id="hero-cta" style="margin-top: -7px; z-index: 10;">
    <div class="card-body mt-5">

      <div class="">

        <a href="" class="btn btn-lg primary-gradient text-mute btn-round px-5" data-toggle="modal" data-target="#previewModal">
          <i class="fas fa-play text-white mr-2"></i>
          The Elevator Pitch
        </a>

        <a href="https://www.notion.so/jackalopemedia/Bonsai-so-Pitch-Deck-885cb1405cac413b9750d1530324ae81" target="_blank">
          <p class="text-center text-muted mb-0 pt-3">
            <i class="fas fa-file-powerpoint mr-1"></i> Pitch Deck
          </p>
        </a>
        <div class="text-center">
          <p class="badge badge-light">v0.0.8</p>
        </div>
      </div>

      <div class="flex-s-b">
        <a href="https://www.youtube.com/c/jackalopemedia" target="_blank" class="">
          <small class="text-center mute mb-0 pt-3">
             @fab('youtube', 'mr-2') Youtube
          </small>
        </a>
        <div class="btn-group">
          <a class="clickable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <small class="text-center mute mb-0 pt-3">
              @fas('compass', 'mr-2') Roadmap
            </small>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://www.notion.so/jackalopemedia/Product-Roadmap-1d3bffd99a004f6b918d3c94171d8fd4">Overview</a>
            <a class="dropdown-item" href="https://trello.com/invite/b/5n67w715/e985db8afdcbd05370ff85710962460b/project-bonsai-v002">Product Roadmap</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://www.notion.so/jackalopemedia/Bonsai-so-Pitch-Deck-885cb1405cac413b9750d1530324ae81">Pitch Deck</a>
          </div>
        </div>
      </div>

      <!-- Example single danger button -->
      {{-- <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div> --}}

    </div>
  </div>
  <button class="newsletter-btn" name="button" data-toggle="modal" data-target="#subscribeModal"><i class="fas fa-envelope mr-2 text-dark"></i> Get Monthly Updates</button>
  {{-- @include('partials.tools') --}}

</div>
