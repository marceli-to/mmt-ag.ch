@extends('web.layout.app')
@section('seo_title', 'Sanierung und Umbau „altes Bauamt“, Untere Reppischstrasse, Dietikon')
@section('seo_description', 'Sanierung und Umbau „altes Bauamt“, Untere Reppischstrasse, Dietikon')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_bauamt_dietikon_01.jpg" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung und Umbau „altes Bauamt“, Untere Reppischstrasse<br>Dietikon (2022–2023)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Dietikon, Hochbauabteilung, Dietikon" />
    <x-info archive="false" label="Architekt" description="stehrenberger architektur, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="2.5 Mio." />
  </p>
</x-project>
@endsection