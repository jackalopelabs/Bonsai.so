{{-- <div class="scrolling-wrapper d-flex justify-content-start pb-5"> --}}
<div class="d-flex justify-content-start pb-5">
  <div class="mr-2">
    <div id="bonsai-room" class="room card mt-2">
      <div  class="pointer" data-toggle="modal" data-target="#bonsaiRoomModal">
        <div class="flex-c-c my-5">
          @include('svg.bonsai')
        </div>
      </div>
      <div class="flex-s-b px-3 pb-3">
        <h5 class="mb-0 text-muted">Bonsai</h5>
        <a href="@permalink(19)" target="_blank">@fas('expand')</a>
      </div>
    </div>
  </div>
  <div class="mr-2">
    <div id="youtube-room" class="room card disabled mt-2" style="opacity:0.5;" data-toggle="tooltip" data-placement="top" title="Coming soon..">
      <div class="pointer" data-toggle="modal" data-target="#">
        <div class="flex-c-c my-5" style="opacity:0.5;">
          @include('svg.unlock-icon')
        </div>
      </div>
      <div class="flex-s-b px-3 pb-3">
        <h5 class="mb-0">@title(20)</h5>
        <a href="@permalink(20)" target="_blank">@fas('expand')</a>
      </div>
    </div>
  </div>
  <div class="mr-2">
    <div class="room card disabled mt-2" style="opacity:0.5;" data-toggle="tooltip" data-placement="top" title="Coming soon..">
      <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
        <div class="flex-c-c my-5" style="opacity:0.5;">
          @include('svg.thefutur.thefutur-logo')
        </div>
      </div>
      <div class="flex-s-b px-3 pb-3">
        <h5 class="mb-0">@title(21)</h5>
        <a href="@permalink(21)" target="_blank">@fas('expand')</a>
      </div>
    </div>
  </div>
  <div class="mr-2">
    <div class="room card disabled mt-2" style="opacity:0.5;" data-toggle="tooltip" data-placement="top" title="Coming soon..">
      <div class="pointer" data-toggle="modal" data-target="#pitchKitModal">
        <div class="flex-c-c my-5" id="unreal-room" style="opacity:0.5;">
          @include('svg.owl3d')
        </div>
      </div>
      <div class="flex-s-b px-3 pb-3">
        <h5 class="mb-0">@title(23)</h5>
        <a href="@permalink(23)" target="_blank">@fas('expand')</a>
      </div>
    </div>
  </div>
</div>
