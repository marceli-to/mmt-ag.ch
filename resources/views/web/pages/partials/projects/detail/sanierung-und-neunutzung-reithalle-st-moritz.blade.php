@extends('web.layout.app')
@section('seo_title', 'Sanierung und Neunutzung Reithalle, St. Moritz')
@section('seo_description', 'Sanierung und Neunutzung Reithalle, St. Moritz')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_reithalle_st_moritz_1_vorschau.jpg" classes="is-first is-landscape">
    <figcaption>
      <span>Modell: Gil Rotmayr, Fotografie: Beat Bühler Fotograf, Zürich</span>
    </figcaption>
  </x-slider-image>
</x-slider>
<x-project>
  <x-heading title="Sanierung und Neunutzung Reithalle<br>St. Moritz (2021–2025)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Gemeinde St. Moritz" />
    <x-info archive="false" label="Architekt" description="stehrenberger architektur mit horisberger wagen, Zürich" />
    <x-info archive="false" label="Bauingenieur" description="dsp Ingenieure + Planer, Uster" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="15.5 Mio." />
  </p>
  {{-- <p>
    <a href="/assets/downloads/mmt_schulhaus_bachtelstrasse_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p> --}}
</x-project>
@endsection