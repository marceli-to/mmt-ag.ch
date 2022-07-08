@extends('web.layout.app')
@section('seo_title', 'Bundesbasis Flugplatz Dübendorf, Dübendorf (2018)')
@section('seo_description', 'Bundesbasis Flugplatz Dübendorf, Dübendorf (2018)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_bundesbasis_flugplatz_duebendorf_1.jpg" caption="Rendering:|Renderisch GmbH, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_bundesbasis_flugplatz_duebendorf_2.jpg" caption="Rendering:|Renderisch GmbH, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title='Bundesbasis Flugplatz Dübendorf<br>Dübendorf (2018)' />
  <p>
    <x-info archive="false" label="Bauherr" description="Schweizerische Eidgenossenschaft, Eidgenössisches Departement für Verteidigung, Bevölkerungsschutz und Sport VBS" />
    <x-info archive="false" label="Architekt" description="Müller Truniger Architekten ETH SIA, Zürich" />
    <x-info archive="false" label="Kostenplanung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Pläne" description="Müller & Truniger / MMT / Kissling+Zbinden" />
    <x-info archive="false" label="Renderings" description="Renderisch GmbH, Zürich" />
  </p>
</x-project>
@endsection