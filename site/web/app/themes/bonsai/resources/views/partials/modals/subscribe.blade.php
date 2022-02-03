<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:420px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope mute mr-2"></i> Monthly Updates</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- Video --}}
          {{-- <div class="wistia_embed wistia_async_abwk7yj6u4" style="height:262px;position:relative;width:466px">
            <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
              <img src="https://fast.wistia.com/embed/medias/abwk7yj6u4/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
            </div>
          </div> --}}
          {{-- /Video --}}
          <p class="mt-2">Get monthly updates about Bonsai.so</p>
          @shortcode('[gravityform id="7" title="false" description="false"]')
        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
