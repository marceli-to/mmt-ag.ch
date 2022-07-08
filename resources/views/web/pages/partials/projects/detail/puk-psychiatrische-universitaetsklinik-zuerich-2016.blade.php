@extends('web.layout.app')
@section('seo_title', 'Einbau einer Jugendpsychiatrie sowie Bereitstellen von Schul- und Therapieräume, PUK Psychiatrische Universitätsklinik, Zürich (2016)')
@section('seo_description', 'Einbau einer Jugendpsychiatrie sowie Bereitstellen von Schul- und Therapieräume, PUK Psychiatrische Universitätsklinik, Zürich (2016)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_psychiatrische_universitaetsklinik_zuerich_1.jpg" caption="Fotografie:|MMT AG" classes="is-first is-landscape" />
  <x-slider-image image="mmt_psychiatrische_universitaetsklinik_zuerich_2.jpg" caption="Fotografie:|MMT AG" classes="is-portrait" />
  <x-slider-image image="mmt_psychiatrische_universitaetsklinik_zuerich_3.jpg" caption="Fotografie:|MMT AG" classes="is-portrait" />
  <x-slider-image image="mmt_psychiatrische_universitaetsklinik_zuerich_4.jpg" caption="Fotografie:|MMT AG" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Einbau einer Jugendpsychiatrie sowie Bereitstellen von Schul- und Therapieräume, PUK Psychiatrische Universitätsklinik<br>Zürich (2016)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description=" Psychiatrische Universitätsklinik Zürich (PUK) c/o Baudirektion Kanton Zürich" />
    <x-info archive="false" label="Architekt" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Psychiatrische_Universitaetsklinik.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection