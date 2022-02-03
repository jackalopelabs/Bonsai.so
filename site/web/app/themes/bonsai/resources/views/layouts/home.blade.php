<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @action('get_header')
    @include('partials.header')
    <div class="wrap container mb-5 pb-5" role="document">

      @guest
        @include('partials.hero')
        @include('partials.explore')
        @include('partials.pricing')
      @endguest

      @user
        @include('partials.explore')
      @enduser


      @include('partials.faq-form')
    </div>
    @include('layouts.modals')
    @action('get_footer')
    @include('partials.footer')
    @wpfoot())
  </body>
  <script src="https://fast.wistia.com/embed/medias/y1wyzd3cy4.jsonp" defer></script>
  <script src="https://fast.wistia.com/assets/external/E-v1.js" defer></script>
</html>
