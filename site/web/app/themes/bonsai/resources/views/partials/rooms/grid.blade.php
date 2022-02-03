<div id="grid" class="container-fluid my-5">
  <h3 class="text-muted">Rooms</h3>
  <div class="row mb-5">
    <div class="col-lg-2 col-md-3">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#bonsaiRoomModal">
          <div class="flex-c-c my-5" id="bonsai-room">
            @include('svg.bonsai')
          </div>
          <h3 class="h4 text-muted">Bonsai</h3>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">23 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <div class="flex-c-c my-5">
            <i class="fab fa-youtube" style="font-size: 66px;"></i>
          </div>
          <h3 class="h4 text-muted">Youtube</h3>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">15 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          {{-- <img class="card-img-top"src="@asset('images/groups/04.svg')" alt="Build an app with SwiftUI Part 1 icon" class="CourseCard__Illustration-za4owo-6 gwcuM illustration"> --}}
          <div class="flex-c-c my-5">
            <i class="fab fa-instagram" style="font-size: 66px;"></i>
          </div>
          <h3 class="h4 text-muted">Instagram</h3>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">11 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <div class="flex-c-c my-5">
            <img class="card-img-top" src="@asset('images/groups/clubhouse.png')" style="height:66px; width:66px;" alt="Build an app with SwiftUI Part 2 icon" class="CourseCard__Illustration-za4owo-6 gwcuM illustration">
          </div>
          <h3 class="h4 text-muted">Clubhouse</h3>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">23 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <div class="flex-c-c my-5" id="unreal-room">
            @include('svg.unreal')
          </div>
          <h3 class="h4 text-muted">UE4</h3>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">18 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-5">

    {{-- <div class="col-lg-2 col-md-4">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <div class="flex-c-c my-5">
            <i class="fab fa-tiktok" style="font-size: 66px;"></i>
          </div>
          <div class="mt-2">
            <h3 class="h4 text-muted">TikTok</h3>
          </div>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">15 members</span>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div> --}}
  </div>

  <h3 class="mt-5 pt-5 text-muted">Clubs</h3>
  <div class="row">
    <div class="col-lg-3 col-md-4">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <img src="@asset('images/groups/devs.svg')" alt="" class="card-img-top px-3 my-2 py-1">
          <div class="mt-2">
            <h3>Devs</h3>
          </div>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">23 online</span> <small class="text-muted pl-2">236 members</small>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <img class="card-img-top"src="@asset('images/groups/02.svg')" alt="Build an app with SwiftUI Part 3 icon" class="CourseCard__Illustration-za4owo-6 gwcuM illustration">
          <div class="mt-2">
            <h3>3D</h3>
          </div>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">12 online</span> <small class="text-muted pl-2">146 members</small>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <img class="card-img-top" src="@asset('images/groups/vr.svg')" alt="" class="">
          <div class="mt-2">
            <h3>VR</h3>
          </div>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">12 online</span> <small class="text-muted pl-2">146 members</small>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4">
      <div class="card mt-2">
        <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
          <img class="card-img-top"src="@asset('images/groups/03.svg')" alt="Build an app with SwiftUI Part 3 icon" class="CourseCard__Illustration-za4owo-6 gwcuM illustration">
          <div class="mt-2">
            <h3>Design</h3>
          </div>
        </div>
        <div class="p-0 pb-3">
          <span class="badge badge-secondary mt-3">18 online</span> <small class="text-muted pl-2">186 members</small>
          <i class="fas fa-expand mute float-right mt-3 pointer" data-toggle="modal" data-target="#fullScreenModal"></i>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.modals.rooms.bonsai')
{{-- @include('partials.modals.groups.fullscreen') --}}
