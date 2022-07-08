@extends('web.layout.app')
@section('seo_title', 'Renovation und Erweiterung Schulhaus Schanz, Rüti')
@section('seo_description', 'Renovation und Erweiterung Schulhaus Schanz, Rüti')
@section('page-header')
<x-button />
@endsection
@section('content')
{{-- <x-slider>
  <x-slider-image image="" caption="Fotografie:|" classes="is-first is-landscape" />
  <x-slider-image image="" caption="Fotografie:|" classes="is-landscape" />
</x-slider> --}}
<x-project>
  <x-heading title="Renovation und Erweiterung Schulhaus Schanz<br>Rüti (2003–2004)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Oberstufenschulpflege Rüti" />
    <x-info archive="false" label="Architekt" description="Felber Keller Lehmann, dipl. Architekten ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="6.89 Mio." />
  </p>
</x-project>
@endsection