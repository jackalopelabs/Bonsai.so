<div class="mt-5" id="contact-us">
  <div class="row">
    <div class="col-sm">
      <div class="px-3 pt-4">
        @php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); @endphp
      </div>
    </div>
    <div class="col-sm">
      <div class="collapse-accordion pt-5 mt-4" id="footer-accordion" role="tablist" aria-multiselectable="true">
        <div class="card mb-3" id="slc">
          <div class="card-body" role="tab" id="headingOne">
            <h5 class="mb-0">
              <div class="pointer" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <small class=""><i class="far fa-question-circle mr-2 mute"></i> How can I see a demo?</small>
              </div>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body bg-light">
              <p class="">We recently put together <a href="#" data-toggle="modal" data-target="#previewModal">a demo video</a>.</p>
            </div>
          </div>
        </div>

        {{-- <div class="card mb-3">
          <div class="card-body" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <small class=""><i class="far fa-question-circle mr-2 mute"></i> How do I get access to the Private Beta?</small>
              </div>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body bg-light">
              <p>If signups are closed, you can join the <a href="">waiting list</a> here.</p>
            </div>
          </div>
        </div> --}}

        <div class="card mb-3">
          <div class="card-body" role="tab" id="headingThree">
            <h5 class="mb-0">
              <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <small class=""><i class="far fa-question-circle mr-2 mute"></i> How can I become a teacher on Bonsai?</small>
              </div>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body bg-light">
              <p>There are three different teacher accounts you can signup for depending on your needs. If you ask, we might be able to give you a free preview before we launch the private beta.</p>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-body" role="tab" id="headingFour">
            <h5 class="mb-0">
              <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <small><i class="fab fa-slack mr-2 text-secondary"></i> How can I help?</small>
              </div>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body bg-light">
              <p>Besides reserving a teaching membership, here are other ways to help:</p>
              <ul>
                <li>Go <a href="https://instagram.com/bonsai.so">give us a follow on Instagram</a> and give us feedback on upcoming classes and products.</li>
                <li><a href="" data-toggle="modal" data-target="#enrollModal">Subscribe</a> to our newsletter</li>
                <li>Contribute on <a href="https://github.com/jackalopeio">Github</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
