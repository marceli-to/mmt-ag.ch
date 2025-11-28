@extends('web.layout.app')
@section('seo_title', 'Umbau MFH Wohllebgasse (2025-2028)')
@section('seo_description', 'Umbau MFH Wohllebgasse (2025-2028)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_wohnen_wohllebgasse_01.jpg" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Umbau MFH Wohllebgasse<br>(2025–2028)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Privat" />
    <x-info archive="false" label="Architekt" description="Kaufmann Widrig Architekten GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="4 Mio." />
  </p>
</x-project>
@endsection