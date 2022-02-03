<!-- Modal -->
<div id="login">
  <div class="modal fade mt-5" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:420px;">
      <div class="modal-content">
        <div class="modal-header">
          @guest
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sign-in-alt mute mr-2"></i> Login</h5>
          @endguest
          @user
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-tachometer-alt mute mr-2"></i> Dashboard</h5>
          @enduser
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @guest
            <p class="text-muted">Login to your account to access your communities</p>
            @php dynamic_sidebar('sidebar-footer') @endphp
          @endguest
          @role('administrator')
            {{-- <p><a href="" data-toggle="modal" data-target="#editModal">Edit Page</a></p>
            <p><a href="" data-toggle="modal" data-target="#editModal">Edit</a></p>
            <p><a href="" data-toggle="modal" data-target="#postModal">Create a Post</a></p> --}}
            <p><a href="/wp/wp-admin/edit.php">Edit Posts</a></p>
          @endrole
          @guest
            <p><a href="/wp/wp-login.php?action=lostpassword">Forgot password?</a></p>
            <p><a class="" href="#" data-toggle="modal" data-dismiss="modal" aria-label="Close">Create new account</a></p>
          @endguest
          @user
            <p><a href="/wp/wp-admin/index.php">Full Dashboard</a></p>
            <p><a class="" href="/wp/wp-login.php?action=logout">Logout</a></p>
          @enduser
        </div>
        <a ahref="#" class="pointer text-center mb-3" data-dismiss="modal" aria-label="Close">
          <span class="uppercase mute smaller" aria-hidden="true">No thanks</span>
        </a>
      </div>
    </div>
  </div>
</div>
