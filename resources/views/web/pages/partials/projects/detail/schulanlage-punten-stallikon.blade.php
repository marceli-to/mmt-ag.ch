@extends('web.layout.app')
@section('seo_title', 'Schulanlage Pünten, Stallikon')
@section('seo_description', 'Schulanlage Pünten, Stallikon')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulanlage_puenten_stallikon.jpg" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Schulanlage Pünten<br>Stallikon (2024–2028)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Schule Stallikon" />
    <x-info archive="false" label="Architekt" description="Niedermann Sigg Schwendener Architekten AG, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="23 Mio." />
  </p>
</x-project>
@endsection