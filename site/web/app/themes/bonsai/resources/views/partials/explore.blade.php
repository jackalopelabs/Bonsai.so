<div id="grid" class="my-5">

  @if( get_field('groups_1_cat') )
    <h3 class="text-muted font-weight-bold h5">@php the_field('groups_1_cat', 2); @endphp</h3>
    @include('communities.grid')
  @endif

  @if( get_field('groups_2_cat') )
    <h3 class="text-muted h5">@php the_field('groups_2_cat'); @endphp</h3>
    @include('courses.grid')
  @endif
</div>

@if( get_field('groups_1_cat') )
  @include('partials.communities')
@endif
@if( get_field('groups_2_cat') )
  @include('partials.courses')
@endif
