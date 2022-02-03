<!-- Tab panes -->
<div class="tab-content p-4-lg">

  <!--   Tab1 -->
  <div class="tab-pane active" id="tab1-1" role="tabpanel">
    @include('communities.bonsai.tab1')
  </div>
  <!--   Tab1 -->

  <!--   Tab2 -->
  <div class="tab-pane" id="tab1-2" role="tabpanel">
    @include('communities.bonsai.tab2')
  </div>
  <!--   Tab2 -->

  <!--   Tab4 -->
  @guest
    <div class="tab-pane" id="tab1-4" role="tabpanel">
      @include('communities.bonsai.tab4')
    </div>
  @endguest
  <!--   Tab4 -->

</div>
