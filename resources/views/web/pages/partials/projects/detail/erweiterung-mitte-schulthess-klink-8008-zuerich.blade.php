@extends('web.layout.app')
@section('seo_title', 'Erweiterung «Mitte» Schulthess Klinik, Zürich (2014–2015)')
@section('seo_description', 'Erweiterung «Mitte» Schulthess Klinik, Zürich (2014–2015)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulthess_klinik_zuerich_1.jpg" caption="" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_2.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_3.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_4.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_5.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_6.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_7.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_zuerich_8.jpg" caption="" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Erweiterung «Mitte» Schulthess Klinik<br>Zürich (2014–2015)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stiftung Wilhelm Schulthess, Zürich" />
    <x-info archive="false" label="Bauherrenberatung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Architekt" description="Grüter Strässle Architekten GmbH, Zürich" />
    <x-info archive="false" label="Baukosten" description="11 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Schulthess_Klinik.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection