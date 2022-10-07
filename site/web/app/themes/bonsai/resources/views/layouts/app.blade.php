<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="container pt-5" role="document">
      <div class="content row mt-5">
        <main class="main col-lg-7 pt-5">
          <div>
            @yield('content')
          </div>
        </main>
        <div class="col-lg-5 pt-5">
          @if (in_category( 'bonsai' ))
            @include('communities.bonsai.accordion')
          @else
            {{-- Docs sidebar goes here --}}
          @endif
        </div>
      </div>
    </div>
    <div class="container">
      @include('partials.faq-form')
      @php do_action('get_footer') @endphp
      @include('partials.footer')
    </div>
    @php wp_footer() @endphp
    @include('layouts.modals')
  </body>
  <script src="https://fast.wistia.com/embed/medias/41efarjayh.jsonp" defer></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>
</html>
