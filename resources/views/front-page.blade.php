@extends('layouts.app')

@section('content')

<section class="front-page_section front-page_section-portfolio" id="portfolio">
  <h2 class="front-page_section-title front-page_section-portfolio-title">Portfolio</h2>
  <div class="front-page_section-portfolio_topics">
    @foreach($portfolio_loop as $portfolio_topic)
    <div class="front-page_section-portfolio_topics--topic" style="background: linear-gradient( rgba(38, 36, 35, 0.3), rgba(38, 36, 35, 0.3) ), url({!! $portfolio_topic['thumbnail_url'] !!});">
      <h2 class="front-page_section-portfolio_topics--topic-title">{!! $portfolio_topic['title'] !!}</h2>
      <button class="front-page_section-portfolio_topics--topic-button">View work</button>
    {{-- <div>{!! $portfolio_topic['content'] !!}</div> --}}
    </div>  
    @endforeach
  </div>

</section><!--#portfolio-->
<section class="front-page_section front-page_section-about-me" id="about-me">
  <h2 class="front-page_section-title front-page_section-about-me-title">About Me</h2>

</section><!--#about-me-->
<section class="front-page_section front-page_section-contact" id="contact">
  <h2 class="front-page_section-title front-page_section-contact-title">Contact</h2>
contact
</section><!--#contact-->
@endsection
