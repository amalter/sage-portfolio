<article @php post_class() @endphp>
  <header class="single-post-header">
    <div class="categories">   
      @php
          echo get_the_category_list(', ');
      @endphp
    </div>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
    <hr class="fancy-pants">
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 1, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @php
    if (has_tag()) {
      echo ' <div class="tags"> ';
      echo get_the_tag_list('<span>Tagged: </span>',', ');
      echo ' </div>';
    }
  @endphp
  <nav class="post-nav">
    <div class="prev">{!!  previous_post_link( '%link', '&laquo; %title' ) !!}</div>
    <div class="next">{!!  next_post_link( '%link', '%title &raquo;' ) !!}</div>
  </nav>
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
