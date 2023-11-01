@extends('web.layout.app')
@section('seo_title', 'Sanierung und Umbau «altes Bauamt», Untere Reppischstrasse, Dietikon')
@section('seo_description', 'Sanierung und Umbau «altes Bauamt», Untere Reppischstrasse, Dietikon')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_bauamt_dietikon_01.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_02.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_03.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bauamt_dietikon_04.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_05.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bauamt_dietikon_06.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bauamt_dietikon_07.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_08.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_09.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bauamt_dietikon_10.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bauamt_dietikon_11.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung und Umbau «altes Bauamt», Untere Reppischstrasse<br>Dietikon (2022–2023)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Dietikon, Hochbauabteilung, Dietikon" />
    <x-info archive="false" label="Architekt" description="stehrenberger architektur, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="2.5 Mio." />
  </p>
</x-project>
@endsection