<!-- Modal -->
<div id="login">
  <div class="modal fade mt-5" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:420px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id=""><i class="fas fa-sign-in-alt mute mr-2"></i> Sign up for free</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="mb-0 text-muted"><small>Already a member? <a href="#" data-target="#dashboardModal" data-toggle="modal" data-dismiss="modal" aria-label="Close">Sign in here.</a></small></p>
          {{-- <p class="text-muted">Sign up below to access communities and courses.</p> --}}
          @shortcode('[gravityform id="3" title="false" description="false"]')
          @if( get_field('web3_cta') )
            <div class="mb-4" style="">
              <small><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="mr-2 pb-1"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg> Have a crypto wallet?</p></small>
              @content()
            </div>
          @endif

        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">Close</span>
        </a>
      </div>
    </div>
  </div>
</div>
