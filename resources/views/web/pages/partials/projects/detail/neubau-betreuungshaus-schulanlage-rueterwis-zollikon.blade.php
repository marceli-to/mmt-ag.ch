@extends('web.layout.app')
@section('seo_title', 'Neubau Betreuungshaus, Schulanlage Rüterwis, Projekt «Güstl», Zollikon (2019)')
@section('seo_description', 'Neubau Betreuungshaus, Schulanlage Rüterwis, Projekt «Güstl», Zollikon (2019)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulanlage_rueterwies_zollikon_1.jpg" caption="Rendering:|Nightnurse Images AG, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulanlage_rueterwies_zollikon_2.jpg" caption="Rendering:|Nightnurse Images AG, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulanlage_rueterwis_zitat.jpg" caption="" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Neubau Betreuungshaus, Schulanlage Rüterwis<br>Projekt «Güstl»<br>Zollikon (2019)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Schule Zollikon, Zollikon" />
    <x-info archive="false" label="Architekt" description="Marcel Baumgartner Architekten GmbH, Zürich" />
    <x-info archive="false" label="Kostenplanung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Renderings" description="Nightnurse Images AG, Zürich" />
    <x-info archive="false" label="Rangierung" description="3. Rang, 3. Preis" />
  </p>
</x-project>
@endsection