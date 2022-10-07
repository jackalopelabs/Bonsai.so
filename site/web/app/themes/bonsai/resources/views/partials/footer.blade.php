<footer class="content-info mt-5">
  <div class="container">
    <div id="footer" class="container my-5 py-5">
      <div class="row">
        <div class="col-sm py-3 brand">
          @php the_field('logo', 'option'); @endphp
          <span class="text-spaced"></span>
        </div>
         <div class="col-sm">
          <ul class="list-unstyled">
            @if( get_field('footer_page_1', 'option') )
              <li><a class="" href="/@title(671)">@title(671)</a></li>
            @endif
            @if( get_field('footer_page_4', 'option') )
              <li><a href="/@title(7)/">@title(7)</a></li>
            @endif
           </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            @if( get_field('footer_page_2', 'option') )
              <li><a href="/@title(5)/">@title(5)</a></li>
            @endif
            <li><a href="/@title(134)/">@title(134)</a></li>
          </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            @if( get_field('footer_page_3', 'option') )
              <li><a href="/@title(6)/">@title(6)</a></li>
            @endif
           </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
            <li><a href="/grants">Grants</a></li>
           </ul>
        </div>
        <div class="col-sm">
          <p class="mt-2 mb-0">Follow Us</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="@php the_field('link_1_url', 'option'); @endphp" target="_blank">@php the_field('link_1_icon', 'option'); @endphp</a></li>
            <li class="list-inline-item"><a href="@php the_field('link_2_url', 'option'); @endphp" target="_blank">@php the_field('link_2_icon', 'option'); @endphp</a></li>
            <li class="list-inline-item"><a href="@php the_field('link_3_url', 'option'); @endphp" target="_blank">@php the_field('link_3_icon', 'option'); @endphp</a></li>
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
        @include('partials.components.version')
      </div>
    </div>
  </div>
  <div class="flex-c-c my-5">
    @php the_field('footer_logo', 'option'); @endphp
  </div>
</footer>
