@extends('web.layout.app')
@section('seo_title', 'Neubau Depot Hard, Tramdepot und Wohnsiedlung, Zürich (2015)')
@section('seo_description', 'Neubau Depot Hard, Tramdepot und Wohnsiedlung, Zürich (2015)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_neubau_depot_hard_zuerich_1.jpg" caption="Rendering:|Nightnurse Images AG, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_neubau_depot_hard_zuerich_2.jpg" caption="Rendering:|Nightnurse Images AG, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_depot_hard_zuerich_3.jpg" caption="Rendering:|Nightnurse Images AG, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title='Neubau Depot Hard, Tramdepot und Wohnsiedlung<br>Zürich (2015)' />
  <p>
    <x-info archive="false" label="Bauherr" description="Stadt Zürich" />
    <x-info archive="false" label="Architekt" description="ARGE Baumann Roserens Architekten mit Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Kostenplanung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Renderings" description="Nightnurse Images AG, Zürich" />
    <x-info archive="false" label="Rangierung" description="4. Rang, 4. Preis" />
  </p>
</x-project>
@endsection