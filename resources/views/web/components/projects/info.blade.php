@if ($archive == 'true')
  <div class="project-info"><span>{{ $label }}:</span> {{ $description }}</div>
@else
  <div class="project-detail__item"><span>{{ $label }}:</span> {{ $description }}</div>
@endif
