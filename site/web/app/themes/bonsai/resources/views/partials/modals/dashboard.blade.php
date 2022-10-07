<!-- Modal -->
<div id="login">
  <div class="modal fade mt-5" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:420px;">
      <div class="modal-content">
        <div class="modal-header">
          @guest
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sign-in-alt mute mr-2"></i> Log in</h5>
          @endguest
          @user
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-tachometer-alt mute mr-2"></i> Dashboard</h5>
          @enduser
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="">
          @guest
            <p class="mb-0 text-muted pl-4 pt-2"><small>Don't have an account? <a href="#" data-target="#signupModal" data-toggle="modal" data-dismiss="modal" aria-label="Close">Sign up here.</a></small></p>
            @php dynamic_sidebar('sidebar-footer') @endphp

            @if( get_field('web3_cta') )
              <div class="mb-4 pl-4" style="">
                <p><i class="fab fa-ethereum mr-2"></i><small>@php the_field('web3_cta', 2); @endphp</small></p>
                @if (is_singular( 'post' ))
                  <a href="/sign-in-with-ethereum/" class="btn btn-dark">Sign in with Ethereum</a>
                @else
                  @php
                    $my_postid = 2; //This is page id or post id
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                  @endphp
                @endif
              </div>
            @endif

          @endguest
          <div class="pl-4">
            @role('administrator')
              {{-- <p><a href="" data-toggle="modal" data-target="#editModal">Edit Page</a></p>
              <p><a href="" data-toggle="modal" data-target="#editModal">Edit</a></p>
              <p><a href="" data-toggle="modal" data-target="#postModal">Create a Post</a></p> --}}
              <p><a href="/wp/wp-admin/admin.php?page=bonsai-settings"><i class="fas fa-cog mr-2 mute"></i> Bonsai Settings</a></p>
              <p><a href="/wp/wp-admin/edit.php"><i class="fas fa-edit mr-2 mute"></i> Edit Posts</a></p>
            @endrole
            @guest
              <p><a href="/wp/wp-login.php?action=lostpassword"><i class="far fa-question-circle mr-2 mute"></i> Forgot password</a></p>
              <p><a class="" href="#" data-toggle="modal" data-dismiss="modal" aria-label="Close"><i class="fas fa-user-plus mr-2 mute"></i> Create new account</a></p>
            @endguest
            @user
              <p><a href="/cancel"><i class="fas fa-shopping-bag mr-2 mute"></i> Manage Subscriptions</a></p>
              <p><a href="/wp/wp-admin/index.php"><i class="fas fa-tachometer-alt mr-2 mute"></i> Full Dashboard</a></p>
              <p><a class="" href="/wp/wp-login.php?action=logout"><i class="fas fa-sign-out-alt mr-2 mute"></i> Logout</a></p>
            @enduser
          </div>
        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true"><i class="fas fa-acorn mr-2"></i> Close</span>
        </a>
      </div>
    </div>
  </div>
</div>
