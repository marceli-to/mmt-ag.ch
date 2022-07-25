@extends('web.layout.app')
@section('seo_title', 'Umbau Schulhaus Römerstrasse, Winterthur')
@section('seo_description', 'Umbau Schulhaus Römerstrasse, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_roemerstrasse_01.jpg" classes="is-first is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Umbau Schulhaus Römerstrasse<br>Winterthur (2022–2023)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Winterthur, Departement Schule und Sport, Winterthur" />
    <x-info archive="false" label="Architekt" description="Rudolf Moser dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="4.5 Mio." />
  </p>
</x-project>
@endsection