@extends('layouts.app')

@section('content')

<section class="front-page_section front-page_section-portfolio" id="portfolio">
    @foreach($portfolio_loop as $portfolio_topic)
    <div class="front-page_section-portfolio_topic" style="background: linear-gradient( rgba(38, 36, 35, 0.3), rgba(38, 36, 35, 0.3) ), url({!! $portfolio_topic['thumbnail_url'] !!});">
      <h2 class="front-page_section-portfolio_topic-title">{!! $portfolio_topic['title'] !!}</h2>
    </div>  
    @endforeach
</section><!--#portfolio-->
<section class="front-page_section" id="about-me">
about me
</section><!--#about-me-->
<section class="front-page_section" id="contact">
contact
</section><!--#contact-->
@endsection
