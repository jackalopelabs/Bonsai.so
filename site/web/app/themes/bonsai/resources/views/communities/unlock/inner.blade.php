<!-- Tab panes -->
<div class="tab-content p-4-lg">

  <!--   Tab1 -->
  <div class="tab-pane active" id="tab2-1" role="tabpanel">
    @include('communities.unlock.tab1')
  </div>
  <!--   Tab1 -->

  <!--   Tab2 -->
  {{-- <div class="tab-pane" id="tab2-2" role="tabpanel">
    @include('communities.unlock.tab2')
  </div> --}}
  <!--   Tab2 -->

  <!--   Tab3 -->
  {{-- @role('subscriber')
    <div class="tab-pane" id="tab2-3" role="tabpanel">
      @include('communities.unlock.tab3')
    </div>
  @endrole --}}
  <!--   Tab3 -->

  <!--   Tab4 -->
  @guest
    <div class="tab-pane" id="tab2-4" role="tabpanel">
      @include('communities.unlock.tab4')
    </div>
  @endguest
  <!--   Tab4 -->

</div>
