<!-- Modal -->
<div id="enrollNow">
  <div class="modal fade mt-5" id="signupmodal02" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel02" aria-hidden="true">
    <div class="modal-dialog pb-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign up for @php the_field('tier_2_name', 2); @endphp<i class="mdi mdi-arrow-right mute ml-2"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @guest
            <p class="mb-0 text-muted"><small>Already a member? <a href="#" data-target="#dashboardModal" data-toggle="modal" data-dismiss="modal" aria-label="Close">Sign in here.</a></small></p>
            @if( get_field('tier_02_custom_guest') )
              @php the_field('tier_02_custom_guest', 2); @endphp
            @else
              @php
                $form_id = get_field('tier_02_form_guest');
                gravity_form($form_id);
              @endphp
            @endif
            @if( get_field('web3_cta') )
              <div class="mb-4" style="">
                <small>
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="mr-2 pb-1"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg>
                    @php the_field('web3_cta', 2); @endphp
                  </p>
                </small>
                @content()
              </div>
            @endif
          @endguest
          @role('subscriber')
            @if( get_field('tier_02_custom_subscriber') )
              @php the_field('tier_02_custom_subscriber', 2); @endphp
            @endif
            @php
              $form_id = get_field('tier_02_form_subscriber');
              gravity_form($form_id);
            @endphp
            @if( get_field('web3_cta') )
              <div class="mb-4" style="">
                <small><p>@php the_field('web3_cta', 2); @endphp</p></small>
                <a href="https://app.unlock-protocol.com/checkout?redirectUri=https://bonsai.so/signup-pro-web3/&paywallConfig={%22locks%22:{%220x03f5259ea2AB18f953CB036d92d8c60C99ad0670%22:{%22network%22:100}},%22pessimistic%22:true}" class="btn btn-secondary">
                  Purchase with Ethereum
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="ml-2"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg>
                </a>
                <p class="text-muted my-0 pl-1"><small>Purchase with Matic</small></p>
              </div>
            @endif
          @endrole
          @role('tier_01')
            @if( get_field('tier_02_custom_tier_01') )
              @php the_field('tier_02_custom_tier_01', 2); @endphp
            @endif
            @php
              $form_id = get_field('tier_02_form_tier_01');
              gravity_form($form_id);
            @endphp
            @if( get_field('web3_cta') )
              <div class="mb-4" style="">
                <small><p>@php the_field('web3_cta', 2); @endphp</p></small>
                <a href="https://app.unlock-protocol.com/checkout?redirectUri=https://bonsai.so/signup-basic-web3/&paywallConfig={%22locks%22:{%220x03f5259ea2AB18f953CB036d92d8c60C99ad0670%22:{%22network%22:100}},%22pessimistic%22:true}" class="btn btn-secondary">
                  Purchase with Ethereum
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="ml-2"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg>
                </a>
                <p class="text-muted my-0 pl-1"><small>Purchase with Matic</small></p>
              </div>
            @endif
          @endrole
          @role('tier_02')
            @if( get_field('tier_02_custom_tier_02') )
              @php the_field('tier_02_custom_tier_02', 2); @endphp
            @endif
            @php
              $form_id = get_field('tier_02_form_tier_02');
              gravity_form($form_id);
            @endphp
            @if( get_field('web3_cta') )
              <div class="mb-4" style="">
                <small><p>@php the_field('web3_cta', 2); @endphp</p></small>
                <a href="https://app.unlock-protocol.com/checkout?redirectUri=https://bonsai.so/signup-basic-web3/&paywallConfig={%22locks%22:{%220x03f5259ea2AB18f953CB036d92d8c60C99ad0670%22:{%22network%22:100}},%22pessimistic%22:true}" class="btn btn-secondary">
                  Purchase with Ethereum
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="ml-2"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg>
                </a>
                <p class="text-muted my-0 pl-1"><small>Purchase with Matic</small></p>
              </div>
            @endif
          @endrole
          @role('tier_03')
            @if( get_field('tier_02_custom_tier_03') )
              @php the_field('tier_02_custom_tier_03', 2); @endphp
            @endif
            @php
              $form_id = get_field('tier_02_form_tier_03');
              gravity_form($form_id);
            @endphp
            @if( get_field('web3_cta') )
              <div class="mb-4" style="">
                <small><p>@php the_field('web3_cta', 2); @endphp</p></small>
                <a href="https://app.unlock-protocol.com/checkout?redirectUri=https://bonsai.so/signup-basic-web3/&paywallConfig={%22locks%22:{%220x03f5259ea2AB18f953CB036d92d8c60C99ad0670%22:{%22network%22:100}},%22pessimistic%22:true}" class="btn btn-secondary">
                  Purchase with Ethereum
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="ml-2"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg>
                </a>
                <p class="text-muted my-0 pl-1"><small>Purchase with Matic</small></p>
              </div>
            @endif
          @endrole
        </div>

        <a ahref="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
