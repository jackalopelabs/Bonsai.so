<p class="h6 text-spaced text-center pt-5 pl-2"><small class="text-success uppercase">@php the_field('hero_h2'); @endphp</small></p>
<h1 class="text-center">@php the_field('hero_h1'); @endphp</h1>

<div class="d-flex justify-content-center pt-4 mb-5">
  <a href="#" class="btn btn-success btn-lg mx-2" data-toggle="modal" data-target="#bibleModal">@php the_field('cta_primary'); @endphp</a>
  @guest
    @if( get_field('cta_secondary') )
      <a href="#" class="btn btn-secondary btn-lg mx-2" data-toggle="modal" data-target="#signupModal">@php the_field('cta_secondary'); @endphp</a>
    @endif
  @endguest
</div>

<div class="text-center mb-4">
  @if( get_field('hero_h3') )
    <p class="mute mb-0"><i class"fas fa-server"></i> @php the_field('hero_h3'); @endphp</p>
  @endif
  @if( get_field('hero_h4') )
    <p class="text-muted mb-0"><i class"fas fa-server"></i> @php the_field('hero_h4'); @endphp</p>
  @endif
</div>
