<h3 class="text-muted small">Courses:</h3>
@include('communities.bonsai.courses.main')
@role('subscriber')
  <div class="text-center">
    <p class="text-muted">Enroll to @title(19) to get full access</p>
    <a href="#tab1-3" class="btn btn-sm btn-secondary" style="color: #111;" data-toggle="tab" role="tab">Join @title(19) <div class="badge badge-secondary text-white ml-2">$15/m</div></a>
  </div>
@endrole
@guest
  <a href="#tab1-4" class="btn btn-sm btn-secondary mt-3" style="color: #111;" data-toggle="tab" role="tab">Sign in</a>
@endguest
