<div class="swiper-slide {{ $classes }}">
  <figure>
    <img src="/assets/media/{{ $image }}" class="is-responsive">
    {{ $slot }}
    @if ($caption)
      <figcaption>
        @if (isset($caption[0]))
          <span>{{ $caption[0] }}</span>
        @endif
        @if (isset($caption[1]))
          <span>{{ $caption[1] }}</span>
        @endif
      </figcaption>
    @endif
  </figure>
</div>