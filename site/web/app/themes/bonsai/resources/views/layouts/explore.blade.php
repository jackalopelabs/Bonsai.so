<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @action('get_header')
    @include('partials.header')
    <div class="wrap container mb-5 pb-5" role="document">
      @include('partials.explore')
      @include('partials.faq-form')
    </div>
    @include('layouts.modals')
    @action('get_footer')
    @include('partials.footer')
    @wpfoot())
  </body>
</html>
