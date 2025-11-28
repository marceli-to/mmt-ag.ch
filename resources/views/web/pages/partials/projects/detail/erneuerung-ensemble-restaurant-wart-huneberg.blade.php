@extends('web.layout.app')
@section('seo_title', 'Erneuerung Ensemble Restaurant Wart, Hüneberg')
@section('seo_description', 'Erneuerung Ensemble Restaurant Wart, Hüneberg')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_gewerbe_restaurant_wart_hueneberg_01.jpg" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Erneuerung Ensemble Restaurant Wart<br>Hüneberg (2024–2028)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Korporation Hünenberg" />
    <x-info archive="false" label="Architekt" description="horisberger wagen architekten, Zürich, stehrenberger architektur, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="5 Mio." />
  </p>
</x-project>
@endsection