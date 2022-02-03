<h1>Wordpress</h1>

@posts(11)
  <h2 class="entry-title">@title</h2>
  {{-- <div class="entry-content">
    @content
  </div> --}}
@endposts

<h3>@title(5)</h3>
<p>@permalink(11)</p>
<p>@excerpt(11)</p>
@thumbnail(11)
{{-- <img src="@thumbnail(get_post(11), 'full', false)" alt="Post 1's Full Image" /> --}}
<p><i>@author</i></p>
<a href="@authorurl">Profile URL</a>
<p><small>@published(11)</small></p>
<p><small>@modified(11)</small></p>
<p>@category(11)</p>
<p>@categories(11)</p>
<p>@shortcode('[my-shortcode]')</p>

@role('administrator')
  <div class="alert alert-warning">This content is only displayed to Admins.</div>
@endrole

@role('author')
  <div class="alert alert-warning">This content is only displayed to Authors.</div>
@endrole

@user
<div class="alert">You are logged in!</div>
@enduser

@guest
  <div class="alert alert-warning">You must be <a href="/wp-login.php">logged in</a> to view this content.</div>
@endguest

<p>A body class: <code>@bodyclass('add-me')</code></p>

<h1>ACF</h1>
<h1>Helpers</h1>

@fa('arrow-up')
@fab('youtube')
