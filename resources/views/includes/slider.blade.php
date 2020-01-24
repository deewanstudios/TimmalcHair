<div class="">
  <div class="rd-parallax-layer" data-speed="0.3" data-sm-speed="1" data-type="html">
    <div class="swiper-container swiper-slider" data-autoplay="true" data-loop="true" data-height="100vh"
      data-dragable="false" data-min-height="480px">

      {{-- /* Slides wrapper */ --}}
      <div class="swiper-wrapper text-center">
        {{-- /* Slides starts here */ --}}
        @forelse ($slides as $slide)
        <div class="swiper-slide" data-slide-bg="{{asset('images/'.$slide->imagePath())}}.jpg"
          data-preview-bg="{{asset('images/'.$slide->imagePath())}}.jpg">
        </div>
        @empty
        <div>No slides to display yet.</div>
        @endforelse
        {{-- /* Slides ends here */ --}}
      </div>
      {{-- /* Slides wrapper ends */ --}}

      {{-- /* Slider Controls starts here */ --}}
      <div class="swiper-button swiper-button-prev swiper-parallax" data-speed="0.5">
        <div class="preview">
          <div class="preview__img preview__img-3"></div>
          <div class="preview__img preview__img-2"></div>
          <div class="preview__img preview__img-1"></div>
        </div>
      </div>
      <div class="swiper-button swiper-button-next swiper-parallax" data-speed="0.5">
        <div class="preview">
          <div class="preview__img preview__img-1"></div>
          <div class="preview__img preview__img-2"></div>
          <div class="preview__img preview__img-3"></div>
        </div>
      </div>
      {{-- /* Slider Controls ends here */ --}}

      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>