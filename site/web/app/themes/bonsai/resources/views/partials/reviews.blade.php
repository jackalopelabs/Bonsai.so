@if( get_field('reviews_heading') )
  <div id="grid" class="mt-5 pt-3">
    <h2 class="mute mb-0 h4">@field('reviews_heading')</h2>
    {{-- <p class="text-muted text-center uppercase"><small>Testimonial description</small></p> --}}
    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card">
          <div class="card-header">
            <h5>@field('review_name_1')</h5>
            <small class="uppercase">@field('review_city_1')</small>
            <p>@field('review_1')</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <div class="card-header">
            <h5>@field('review_name_2')</h5>
            <small class="uppercase">@field('review_city_2')</small>
            <p>@field('review_2')</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <small class="uppercase">@field('review_summary_sm')</small>
        <h1>@field('review_summary_lg')</h1>
        <p>@field('review_summary')</p>
      </div>
    </div>

  </div>
@endif
