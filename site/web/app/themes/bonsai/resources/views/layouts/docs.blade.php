<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container mb-5 pb-5" role="document">
      @include('partials.docs-hero')
      @include('partials.components.accordion.main')
      <h3 class="text-center my-5 py-5">Don't want to DIY? We got you.</h3>
      @include('partials.pricing')
      {{-- <div class="coming-soon">
        @include('pages.home.cta')
        @include('pages.home.cards')
        @include('pages.home.bonsai')
        @include('pages.home.faq')
      </div> --}}
      @include('partials.faq-form')
    </div>
    @include('layouts.modals')
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
