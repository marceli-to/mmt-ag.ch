@extends('web.layout.app')
@section('seo_title', 'Sanierung und Instandsetzung VBZ Tramdepot Kalkbreite, Zürich (2016–2019)')
@section('seo_description', 'Sanierung und Instandsetzung VBZ Tramdepot Kalkbreite, Zürich (2016–2019)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_0.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_zitat_1.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_3-4.jpg" caption="Fotografie:|Dominic Büttner, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_zitat_2.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_vbz_tramdepot_kalkbreite_zuerich_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung und Instandsetzung VBZ Tramdepot Kalkbreite<br>Zürich (2016–2019)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Verkehrsbetriebe Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="30 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Tramdepot_Kalkbreite.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection