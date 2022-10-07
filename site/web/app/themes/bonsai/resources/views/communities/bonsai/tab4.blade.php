<div id="signup">
  @guest
    <p class="text-center text-muted">Sign up below to create an account</p>
    @shortcode('[gravityform id="3" title="false" description="false"]')
    <div class="mb-4" style="">
      <small><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" class="mr-2 pb-1"><path style="fill:white;" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"/></svg> Have a crypto wallet?</p></small>
      @php
        $my_postid = 2; // This is page id or post id
        $content_post = get_post($my_postid);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
      @endphp
    </div>
  @endguest

</div>
