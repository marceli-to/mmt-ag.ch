@extends('web.layout.app')
@section('seo_title', 'Gleisquerung Stadtmitte 2. Etappe, Winterthur (2014–2016)')
@section('seo_description', 'Gleisquerung Stadtmitte 2. Etappe, Winterthur (2014–2016)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_gleisquerung_winterthur_1.jpg" caption="Fotografie:|Dominique M. Wehrli, Dietikon" classes="is-first is-landscape" />
  <x-slider-image image="mmt_gleisquerung_winterthur_2.jpg" caption="Fotografie:|Dominique M. Wehrli, Dietikon" classes="is-portrait" />
  <x-slider-image image="mmt_gleisquerung_winterthur_3.jpg" caption="Fotografie:|Dominique M. Wehrli, Dietikon" classes="is-portrait" />
  <x-slider-image image="mmt_gleisquerung_winterthur_4.jpg" caption="Fotografie:|Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_gleisquerung_winterthur_5.jpg" caption="Fotografie:|Michael Haug, Winterthur" classes="is-landscape" />
  <x-slider-image image="mmt_gleisquerung_winterthur_6.jpg" caption="Fotografie:|Michael Haug, Winterthur" classes="is-landscape" />
  <x-slider-image image="mmt_gleisquerung_winterthur_7.jpg" caption="Fotografie:|Michael Haug, Winterthur" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title='Gleisquerung Stadtmitte 2. Etappe<br>Winterthur (2014–2016)' />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Winterthur, Departement Bau, Tiefbauamt, Winterthur" />
    <x-info archive="false" label="Architekt" description="Müller & Truniger dipl. Architekten, Zürich" />
    <x-info archive="false" label="Bauleitung Hochbau" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="Gesamtprojekt CHF 35 Mio. / Hochbau CHF 2 Mio." />
  </p>
</x-project>
@endsection