<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container mb-5 pb-5" role="document">
      @include('partials.tv')
      @include('partials.faq-form')
    </div>
    @include('layouts.modals')
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
