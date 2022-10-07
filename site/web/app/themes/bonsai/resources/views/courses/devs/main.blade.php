<!-- Devs Room Modal -->
<div id="courseModal">
  <div class="modal fade mt-5" id="devsGroupModal" tabindex="-1" role="dialog" aria-labelledby="devsGroupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Bonsai University</h3>
          <p><span class="badge badge-secondary mr-2">102 videos</span> <span class="badge badge-primary">36 articles</span></p>
        </div>
        <div class="modal-body">
          @include('courses.devs.accordion')
        </div>
        <a href="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">Close</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Devs Room Modal-->
