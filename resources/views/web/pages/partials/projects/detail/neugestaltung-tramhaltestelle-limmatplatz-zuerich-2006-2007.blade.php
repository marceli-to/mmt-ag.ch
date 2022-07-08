@extends('web.layout.app')
@section('seo_title', 'Neugestaltung Tramhaltestelle Limmatplatz Zürich (2006–2007)')
@section('seo_description', 'Neugestaltung Tramhaltestelle Limmatplatz Zürich (2006–2007)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_limmatplatz_1.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_limmatplatz_2.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_limmatplatz_3.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_limmatplatz_zitat.jpg" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Neugestaltung Tramhaltestelle Limmatplatz<br>Zürich (2006–2007)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Verkehrsbetriebe Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Baumann Roserens Architekten AG, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="4 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Tramhaltestelle_Limmatplatz.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection