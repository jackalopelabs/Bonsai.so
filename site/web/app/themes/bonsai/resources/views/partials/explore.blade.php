<div id="grid" class="my-5">
  {{-- <h2 class="text-center py-5"><i class="fas fa-location-arrow h3 text-muted"></i> Explore</h2> --}}
  <h3 class="text-muted font-weight-bold h5">Communities <div type="button" class="btn px-0" data-toggle="tooltip" data-placement="right" title="A space is a specific topic within a group."></div></h3>
  @include('communities.grid')

  <h3 class="text-muted h5">Courses</h3>
  @include('courses.grid')
</div>

@include('partials.communities')
@include('partials.courses')
