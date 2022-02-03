<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="container-fluid pt-5" role="document">
      <div class="content row mt-5">
        <main class="main col-lg-6 pt-5 ml-5">
          <div class="ml-5">
            @yield('content')
          </div>
        </main>
        <div class="col-lg-4 pt-5">
          @if (in_category( 'bonsai' ))
            @include('communities.bonsai.accordion')
          @else
            Docs sidebar goes here
          @endif
        </div>
      </div>
    </div>
    <div class="container">
      @include('partials.faq')
      @php do_action('get_footer') @endphp
      @include('partials.footer')
    </div>
    @php wp_footer() @endphp
    @include('layouts.modals')
  </body>
  <script src="https://fast.wistia.com/embed/medias/y669pp4nw1.jsonp" defer></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>
</html>
