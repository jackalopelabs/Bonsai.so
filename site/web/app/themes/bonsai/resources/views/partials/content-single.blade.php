<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer class="flex-s-b my-5">
    @php previous_post_link( '%link', '<button class="btn btn-dark">Previous post</button>'); @endphp
    @php next_post_link( '%link', '<button class="btn btn-success">Next post <i class="fas fa-arrow-right ml-2"></i></button>'); @endphp
    {{-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}
  </footer>
  {{-- <div class="mt-5">
    @php comments_template('/partials/comments.blade.php') @endphp
  </div> --}}
</article>
