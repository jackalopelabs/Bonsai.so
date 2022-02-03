<footer class="content-info mt-5">
  <div class="container">
    <div id="footer" class="container my-5 py-5">
      <div class="row">
        <div class="col-sm py-3">
          {{-- @include('svg.logo') --}}
          @include('svg.bonsai.bonsai-logo-03')
          <span class="text-spaced"></span>
        </div>
         <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/@title(5)/">@title(5)</a></li>
            <li><a href="/@title(6)/">@title(6)</a></li>
            <li><a href="/@title(7)/">@title(7)</a></li>
           </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/docs/">Communities</a></li>
            <li><a href="/tv/" class="">Courses</a></li>
          </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            <a class="" href="/@title(134)">@title(134)</a>
           </ul>
        </div>
        <div class="col-sm">
          <p class="mt-2 mb-0">Follow Us</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://youtube.com/jackalopemedia" target="_blank"><i class="fab fa-youtube mute"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/bonsai.so/" target="_blank"><i class="fab fa-instagram mute"></i></a></li>
            <li class="list-inline-item"><a href="https://github.com/jackalopeio" target="_blank"><i class="fab fa-github mute"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center my-5">
      <p class="mute mb-0">
        <small>
          <a href="/privacy-policy">Privacy & Terms</a>
          © {{ get_bloginfo('name', 'display') }} | All rights reserved
          @php echo date("Y"); @endphp
        </small>
      </p>
      <div class="text-center">
        <p class="badge badge-light">v0.0.10</p>
      </div>
    </div>
  </div>
  <div class="flex-c-c my-5">
    @include('svg.logo')
  </div>
</footer>
