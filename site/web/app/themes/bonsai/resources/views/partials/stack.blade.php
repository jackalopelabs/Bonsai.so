<div class="" style="margin: 0 -18px -40px 0;z-index:11;">
  @include('svg.bonsai.big-bonsai')
</div>
<div class="card mx-auto active" id="hero-cta" style="margin-top: -7px; z-index: 10;">
  <div class="card-body mt-5">
    <div class="py-3">
      <a href="#courses" class="btn btn-lg primary-gradient text-white btn-round px-5">
        Bonsai University
        <i class="fas fa-arrow-right ml-1"></i>
      </a>

      <a href="https://github.com/jackalopeio/bonsai/" target="_blank">
        <p class="text-center text-muted mb-0 pt-3">
          <i class="fab fa-github mr-1"></i> Github
        </p>
      </a>
      <div class="text-center">
        @include('partials.components.version')
      </div>
    </div>
    <div class="flex-s-b">
      <a href="https://jackalopemedia.notion.site/Bonsai-so-0438fbbbb0b5429fbd0982835e7de7d1" target="_blank" class="">
        <small class="text-center mute mb-0 pt-3">
           <i class="fas fa-compass mr-1"></i> Roadmap
        </small>
      </a>
      <div class="btn-group">
        <a class="clickable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <small class="text-center mute mb-0 pt-3">
            <i class="fab fa-trello mr-1"></i> Trello
          </small>
        </a>
        <div class="dropdown-menu">
          <a href="https://trello.com/invite/b/5n67w715/e985db8afdcbd05370ff85710962460b/project-bonsai-v002" class="dropdown-item" target="_blank">Project Bonsai</a>
          <div class="dropdown-divider"></div>
          <a href="https://trello.com/invite/b/gtpcYNvC/961d55ce28eeb7a573be8914df41c797/bonsai-speed-run" class="dropdown-item" target="_blank">Bonsai Speed Run</a>
          <a href="https://trello.com/invite/b/73kO6Lhx/fb44e86669fdbf5441d28a087801d483/bonsai-masterclass" class="dropdown-item" target="_blank">Bonsai Masterclass</a>
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

@include('partials.tools')

<a href="https://jackalope.io/the-smart-site-manifesto/" target="_blank" class="text-center mt-5 btn btn-sm btn-outline-secondary" style="padding: 1.2rem 2rem 1rem;"><i class="fas fa-list mr-2"></i> The Smart Site Manifesto</a>
<a href="" class="mt-2 mb-5 mute" data-toggle="modal" data-target="#subscribeModal">
  <i class="fas fa-envelope mr-1 text-success"></i>
  Subscribe to Newsletter
</a>
