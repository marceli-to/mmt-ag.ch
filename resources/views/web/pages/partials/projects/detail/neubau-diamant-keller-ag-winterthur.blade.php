@extends('web.layout.app')
@section('seo_title', 'Neubau Diamant Keller AG, Winterthur')
@section('seo_description', 'Neubau Diamant Keller AG, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_Keller_Diamant_1.jpg" classes="is-first is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_3.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_4.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_5.jpg" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_6.jpg" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Keller Druckmesstechnik AG<br>Winterthur (2021–2025)" />
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
  <p>
    <a href="javascript:;" class="anchor-chevron" data-toggle-video>Zeitraffer-Video</a>
  </p>
  <div class="project-video__container is-hidden" data-video>
    <video controls poster="/storage/mmt_keller_diamant_zeitraffer.jpg">
      <source src="/storage/mmt_keller_diamant_zeitraffer.mp4" type="video/mp4">
    </video>
  </div>
</x-project>
@endsection