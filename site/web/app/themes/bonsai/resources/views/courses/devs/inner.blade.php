<!-- Tab panes -->
<div class="tab-content p-4-lg">

  <!--   Tab1 -->
  <div class="tab-pane active" id="tab3-1" role="tabpanel">
    @include('courses.devs.tab1')
  </div>
  <!--   Tab1 -->

  <!--   Tab4 -->
  @guest
    <div class="tab-pane" id="tab3-4" role="tabpanel">
      @include('courses.devs.tab4')
    </div>
  @endguest
  <!--   Tab4 -->

</div>
