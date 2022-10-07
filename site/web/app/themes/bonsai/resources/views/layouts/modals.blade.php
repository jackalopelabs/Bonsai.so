@include('partials.modals.dashboard')
@include('partials.modals.preview')
@include('partials.modals.subscribe')
@include('partials.modals.bible.main')

@guest
  @include('partials.modals.signup')
@endguest
