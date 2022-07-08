@extends('web.layout.app')
@section('seo_title', 'Neubau Wohnüberbauung Schulsteig, Kilchberg')
@section('seo_description', 'Neubau Wohnüberbauung Schulsteig, Kilchberg')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulsteig_kilchberg_1.jpg" caption="Visualisierung:|felberfendt Architekten GmbH, Zürich" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Wohnüberbauung Schulsteig<br>Kilchberg (2021–2024)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="3A Immobilien" />
    <x-info archive="false" label="Architekt" description="felberfendt Architekten GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="12 Mio." />
  </p>
  {{-- <p>
    <a href="/assets/downloads/mmt_salzhaus_bonstetten_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p> --}}
</x-project>
@endsection