<article @php post_class() @endphp>
  <header>
    <div class="categories">   
      @php
        echo get_the_category_list(', ');
      @endphp
    </div>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
