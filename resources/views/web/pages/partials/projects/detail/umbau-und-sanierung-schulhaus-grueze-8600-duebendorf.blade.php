@extends('web.layout.app')
@section('seo_title', 'Umbau und Sanierung Schulhaus Grüze, Dübendorf (2006–2007)')
@section('seo_description', 'Umbau und Sanierung Schulhaus Grüze, Dübendorf (2006–2007)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_1.jpg" caption="" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_2.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_3.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_4.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_5.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_6.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_7.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_8.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_9.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_10.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_11.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_grueze_duebendorf_12.jpg" caption="" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Umbau und Sanierung Schulhaus Grüze<br>Dübendorf (2006–2007)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Oberstufenschulpflege Dübendorf-Schwerzenbach, Dübendorf" />
    <x-info archive="false" label="Architekt" description="Peter Kunz Architektur GmbH, Winterthur" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="17 Mio." />
  </p>
</x-project>
@endsection