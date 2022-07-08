@extends('web.layout.app')
@section('seo_title', 'Erweiterung Schulanlage Hagen, Illnau (2016–2018)')
@section('seo_description', 'Erweiterung Schulanlage Hagen, Illnau (2016–2018)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulanlage_hagen_illnau_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_6.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_7.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_8.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_9.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_10.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_11.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_12.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_13.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_14.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_hagen_illnau_15.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Erweiterung Schulanlage Hagen<br>Illnau (2016–2018)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Illnau Effretikon, Effretikon" />
    <x-info archive="false" label="Architekt" description="felberfendt Architekten GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="26 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Schulanlage_Hagen.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection