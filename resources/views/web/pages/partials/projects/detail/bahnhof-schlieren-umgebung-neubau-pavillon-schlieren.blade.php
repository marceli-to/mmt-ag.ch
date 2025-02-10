@extends('web.layout.app')
@section('seo_title', 'Bahnhof Schlieren, Umgebung & Neubau Pavillon, Schlieren')
@section('seo_description', 'Bahnhof Schlieren, Umgebung & Neubau Pavillon, Schlieren')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_bahnhof_schlieren_01.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_bahnhof_schlieren_02.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bahnhof_schlieren_03.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bahnhof_schlieren_04.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bahnhof_schlieren_05.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bahnhof_schlieren_06.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Bahnhof Schlieren, Umgebung & Neubau Pavillon<br>Schlieren (2021–2023)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="SBB AG, Immobilien Bewirtschaftung, Zürich" />
    <x-info archive="false" label="Architekt" description="Baumann Roserens Architekten AG, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="3.5 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT0024_VI_Bahnhof_Schlieren_2025.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection