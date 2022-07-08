@extends('web.layout.app')
@section('seo_title', 'Sanierung Schwangengasse, Zürich')
@section('seo_description', 'Sanierung Schwangengasse, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schwanengasse_vorschau.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung Schwangengasse<br>Zürich (2021–2022)" />
  <p>
    <x-info archive="false" label="Vertreter der STWEG" description="Barrier Immobilien AG" />
    <x-info archive="false" label="Generalplaner" description="GP Generalplaner AG, Zürich" />
    <x-info archive="false" label="Architekt" description="horisberger wagen architekten, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="1.5 Mio." />
  </p>
  {{-- <p>
    <a href="/assets/downloads/mmt_schulhaus_bachtelstrasse_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p> --}}
</x-project>
@endsection