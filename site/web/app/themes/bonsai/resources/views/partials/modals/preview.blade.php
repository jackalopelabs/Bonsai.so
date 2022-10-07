<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog pb-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@php the_field('preview_modal_name', 'option'); @endphp</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @php the_field('preview_modal_content', 'option'); @endphp
          <p class="py-4 mt-3">@php the_field('preview_modal_cta', 'option'); @endphp</p>
          @shortcode('[gravityform id="7" title="false" description="false"]')
        </div>
        <a href="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">Close</span>
        </a>

      </div>
    </div>
  </div>
</div>
