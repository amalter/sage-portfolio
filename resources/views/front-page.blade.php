@extends('layouts.app')

@section('content')

<section class="front-page_section front-page_section-portfolio" id="portfolio">
  <h2 class="front-page_section-title front-page_section-portfolio-title">Portfolio</h2>
  <hr class="fancy-pants">
  <div class="front-page_section-portfolio_topics">
    @foreach($portfolio_loop as $portfolio_topic)
    <div class="front-page_section-portfolio_topics--topic" style="background: linear-gradient( rgba(38, 36, 35, 0.3), rgba(38, 36, 35, 0.3) ), url({!! $portfolio_topic['thumbnail_url'] !!});">
      <h2 class="front-page_section-portfolio_topics--topic-title">{!! $portfolio_topic['title'] !!}</h2>
      <button class="front-page_section-portfolio_topics--topic-btn-open">View work</button>
     
    {{-- <div>{!! $portfolio_topic['content'] !!}</div> --}}
    </div><!--end  front-page_section-portfolio_topics--topic -->
    <!--end portfolio topic modal-->
    <div class="portfolio_topic-modal" role="dialog" aria-labelledby="modal_title">
      <div class="portfolio_topic-modal__content" id="portfolio_topic-modal__holder" role="document">
        <button class="portfolio_topic-modal__content--btn-close" id="portfolio_topic-modal__close"type="button" aria-label="close">&times;</button>
        <div class="portfolio_topic-modal__content--details">{!! $portfolio_topic['content'] !!}</div>
      </div><!--end portfolio_topics-modal__content-->
    </div><!--end  portfolio_topics-modal -->
    <!--modal-->
    @endforeach
  </div>
<script>
// modal window
(function() {
    'use strict';
    const bodyElement = document.body;
    const triggers = document.getElementsByClassName('front-page_section-portfolio_topics--topic-btn-open');
    const triggerArray = Array.from(triggers).entries();
    const modals = document.getElementsByClassName('portfolio_topic-modal');
    const closeButtons = document.getElementsByClassName('portfolio_topic-modal__content--btn-close');

    for (let [index, trigger] of triggerArray) {
        let triggerIndex = index;
        function toggleModal() {
            modals[triggerIndex].classList.toggle('show-modal');
            bodyElement.classList.toggle('no-scroll');
        }
        trigger.addEventListener("click", toggleModal);
        closeButtons[triggerIndex].addEventListener("click", toggleModal);
    }
})();
</script>
</section><!--#portfolio-->
<section class="front-page-content">
  @php the_content() @endphp
</section>
@endsection
