@extends('web.layout.app')
@section('seo_title', 'Neubau Einfamilienhaus, Kilchberg')
@section('seo_description', 'Neubau Einfamilienhaus, Kilchberg')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_neubau_efh_kilchberg_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_neubau_efh_kilchberg_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_kilchberg_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_kilchberg_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Einfamilienhaus<br>Kilchberg (2004–2005)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Privat" />
    <x-info archive="false" label="Architekt" description="Baumann Roserens Architekten AG, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
  </p>
</x-project>
@endsection