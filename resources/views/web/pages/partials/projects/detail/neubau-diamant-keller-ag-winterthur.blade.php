@extends('web.layout.app')
@section('seo_title', 'Neubau Diamant Keller AG, Winterthur')
@section('seo_description', 'Neubau Diamant Keller AG, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_Keller_Diamant_1_vorschau.jpg" caption="Visualisierung:|Strut Architekten AG, Winterthur" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Diamant Keller AG<br>Winterthur (2021–2025)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Keller Druckmesstechnik AG, Winterthur" />
    <x-info archive="false" label="Generalplaner" description="GP Generalplaner AG, Zürichh" />
    <x-info archive="false" label="Architekt" description="Strut Architekten AG, Winterthur" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="65 Mio." />
  </p>
  {{-- <p>
    <a href="/assets/downloads/mmt_schulhaus_bachtelstrasse_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p> --}}
</x-project>
@endsection