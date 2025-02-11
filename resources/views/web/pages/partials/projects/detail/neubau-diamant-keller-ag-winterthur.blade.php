@extends('web.layout.app')
@section('seo_title', 'Neubau Diamant Keller AG, Winterthur')
@section('seo_description', 'Neubau Diamant Keller AG, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_Keller_Diamant_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_8.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_9.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_10.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_11.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_Keller_Diamant_12.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_13.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_Keller_Diamant_14.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Keller Druckmesstechnik AG<br>Winterthur (2021–2025)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Keller Druckmesstechnik AG, Winterthur" />
    <x-info archive="false" label="Generalplaner" description="GP Generalplaner AG, Zürich" />
    <x-info archive="false" label="Architekt" description="Strut Architekten AG, Winterthur" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="65 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT0024_IG_Keller_Diamant_AG_2025.pdf" target="_blank" class="anchor-chevron">PDF</a><br>
    <a href="javascript:;" class="anchor-chevron" data-toggle-video>Zeitraffer-Video</a>
  </p>
  <div class="project-video__container is-hidden" data-video>
    <video controls poster="/storage/mmt_keller_diamant_zeitraffer.jpg">
      <source src="/storage/mmt_keller_diamant_zeitraffer_2025.mp4" type="video/mp4">
    </video>
  </div>
</x-project>
@endsection