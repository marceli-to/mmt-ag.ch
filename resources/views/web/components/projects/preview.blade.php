<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        @if ($slug)
        <a href="{{ route('page.project_detail', ['slug' => $slug]) }}">
          <img src="/assets/media/{{ $image }}" class="is-responsive" alt="{{ $alt }}" width="1000" height="672">
        </a>
        @else
          <img src="/assets/media/{{ $image }}" class="is-responsive" alt="{{ $alt }}" width="1000" height="672">
        @endif
      </figure>
      <div class="text-media__body">
        <p>
          @if ($slug)
            <a href="{{ route('page.project_detail', ['slug' => $slug]) }}" class="btn-more">
              {!! $text !!}
            </a>
          @else
            {!! $text !!}
          @endif
        </p>
      </div>
    </article>
  </div>
</section>