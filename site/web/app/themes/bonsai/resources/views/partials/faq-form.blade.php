@if( get_field('contact_heading') )
  <div class="pt-5" id="contact-us">
    <div class="row">
      <div class="col-sm mt-3">
        <div class="px-3">
          <h4>@php the_field('contact_heading', 2); @endphp</h4>
          <p class="text-muted">@php the_field('contact_description'); @endphp</p>
          @shortcode('[gravityform id="2" title="false" description="false"]')
        </div>
      </div>

      <div class="col-sm mt-3">
        <div class="collapse-accordion pt-5 mt-4" id="footer-accordion" role="tablist" aria-multiselectable="true">
          @if( get_field('faq_question_1') )
            <div class="card mb-3">
              <div class="card-body" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <div class="pointer" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <small class=""><i class="far fa-question-circle mr-2 mute"></i> @php the_field('faq_question_1'); @endphp</small>
                  </div>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body bg-light">
                  @php the_field('faq_answer_1'); @endphp
                </div>
              </div>
            </div>
          @endif

          @if( get_field('faq_question_2') )
            <div class="card mb-3">
              <div class="card-body" role="tab" id="headingTwo">
                <h5 class="mb-0">
                  <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <small class=""><i class="far fa-question-circle mr-2 mute"></i> @php the_field('faq_question_2'); @endphp</small>
                  </div>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body bg-light">
                  @php the_field('faq_answer_2'); @endphp
                </div>
              </div>
            </div>
          @endif

          @if( get_field('faq_question_3') )
            <div class="card mb-3">
              <div class="card-body" role="tab" id="headingThree">
                <h5 class="mb-0">
                  <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <small class=""><i class="far fa-question-circle mr-2 mute"></i> @php the_field('faq_question_3'); @endphp</small>
                  </div>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-body bg-light">
                  @php the_field('faq_answer_3'); @endphp
                </div>
              </div>
            </div>
          @endif

          @if( get_field('faq_question_4') )
            <div class="card mb-3">
              <div class="card-body" role="tab" id="headingFour">
                <h5 class="mb-0">
                  <div class="pointer collapsed" data-toggle="collapse" data-parent="#footer-accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <small><i class="fab fa-discord mr-2 text-secondary"></i> @php the_field('faq_question_4'); @endphp</small>
                  </div>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="card-body bg-light">
                  @php the_field('faq_answer_4'); @endphp
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endif
