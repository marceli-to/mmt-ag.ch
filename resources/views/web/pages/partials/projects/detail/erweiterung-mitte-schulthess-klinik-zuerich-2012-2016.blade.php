@extends('web.layout.app')
@section('seo_title', 'Erweiterung «Mitte» Schulthess Klinik, Zürich (2012–2016)')
@section('seo_description', 'Erweiterung «Mitte» Schulthess Klinik, Zürich (2012–2016)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulthess_klinik_1.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_2.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_3.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_4.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-portrait" />
  <x-slider-image image="mmt_schulthess_klinik_5.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-portrait" />
  <x-slider-image image="mmt_schulthess_klinik_6.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_7.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_8.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-portrait" />
  <x-slider-image image="mmt_schulthess_klinik_9.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
  <x-slider-image image="mmt_schulthess_klinik_10.jpg" caption="Fotografie:|Urs Pichler, Adliswil" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title='Erweiterung «Mitte» Schulthess Klinik<br>Zürich (2012–2016)' />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Wilhelm Schulthess-Stiftung, Zürich" />
    <x-info archive="false" label="Bauherrenberatung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Architekt" description="Grüter Strässle Architekten GmbH, Zürich" />
    <x-info archive="false" label="Generalunternehmung" description="HRS Real Estate AG, 8501 Frauenfeld" />
    <x-info archive="false" label="Baukosten" description="90 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Schulthess_Klinik.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection