<div id="grid" class="my-5">

  @if( get_field('groups_2_cat') )
    <h3 class="text-muted h5">@php the_field('groups_2_cat'); @endphp</h3>
    @include('partials.grid')
  @endif
</div>

@if( get_field('groups_1_cat') )
  <h3 class="text-muted font-weight-bold h5">@php the_field('groups_1_cat'); @endphp</h3>
  @include('partials.grants')
@endif

@if( get_field('groups_2_cat') )
  @include('partials.modals.resources.main')
  {{-- @include('partials.modals.bible.main') --}}
  @include('communities.bonsai.main')
@endif

@if( get_field('groups_1_cat') )
  {{-- @include('partials.modals.grants') --}}
@endif
