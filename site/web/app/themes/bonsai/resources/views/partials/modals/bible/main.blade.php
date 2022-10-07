<!-- Devs Room Modal -->
<div id="">
  <div class="modal fade mt-5" id="bibleModal" tabindex="-1" role="dialog" aria-labelledby="bibleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h3>Grant Application Template</h3>
          <p><span class="badge badge-secondary mr-2">16 modules</span></p>
        </div> --}}
        <div class="modal-body">
          <div class="mb-5">
            <div class="flex-s-b">
              <h3>Bonsai.so - Patreon for Web3</h3>
              <div class="">
                <small class="badge badge-light">16 Modules</small>
                {{-- <small class="badge badge-light">Network</small> --}}
              </div>
            </div>

            <div class="flex-s-b">
              <div class="d-flex pt-2">
                <a href="https://discord.gg/JtPzNQGV5d" target="_blank"><i class="fab fa-discord h5 text-primary pointer"></i></a>
                <a href="https://github.com/jackalopeio" target="_blank"><i class="fab fa-github h5 text-primary pointer ml-3"></i></a>
                <a href="https://jackalopemedia.notion.site/Bonsai-so-0438fbbbb0b5429fbd0982835e7de7d1" target="_blank"><i class="fas fa-expand h5 text-primary pointer ml-3"></i></a>
              </div>
              <a href="https://jackalopemedia.notion.site/Bonsai-so-0438fbbbb0b5429fbd0982835e7de7d1" target="_blank" class="btn btn-sm btn-secondary pt-1" style="color: #111;"><span class="mr-1">@include('svg.notion')</span> Notion Template</a>
            </div>
          </div>

          <p class="mute"><small><i>This file is the index, or the Bible for all things Bonsai.so that are in production.</i></small></p>
          <!-- Video /!-->
          <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_226bn31yu0 videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/226bn31yu0/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
          <!-- Video /!-->

          <div class="">
            <div class="card my-4">
              <div class="card-body">
                <p class="mb-0">Bonsai is Patreon for Web3.</p>
              </div>
            </div>
            <div class="card active my-4">
              <div class="card-body">
                <p class="">Bonsai is a <span class="text-success">walled garden</span> for your community to access exclusive content, perks, and events.</p>
                <p class="mute mb-0"><strong>Category:</strong> Web3, Community, Continuing Education, Developer Tools, K-12, Entertainment, and Media.</p>
              </div>
            </div>
          </div>

          <div class="my-4">
            <div class="alert alert-dismissible fade show" role="alert">
              <p class="">Get monthly updates about Bonsai.so</p>
              @shortcode('[gravityform id="7" title="false" description="false"]')
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

          @include('partials.modals.bible.accordion')
        </div>
        <a href="#" class="pointer text-center mb-2" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">Close</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Devs Room Modal-->
