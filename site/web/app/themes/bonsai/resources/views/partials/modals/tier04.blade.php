<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="tier04modal" tabindex="-1" role="dialog" aria-labelledby="tier04ModalLabel" aria-hidden="true">
    <div class="modal-dialog pb-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@php the_field('tier_4_name'); @endphp <i class="mdi mdi-arrow-right mute ml-2"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <small class="text-muted">Select a Plan</small>
          @include('partials.hosting')
          <a href="/@title(5)" class="btn btn-primary btn-lg w-100 mt-5">Learn more..</a>
        </div>

        <a ahref="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
