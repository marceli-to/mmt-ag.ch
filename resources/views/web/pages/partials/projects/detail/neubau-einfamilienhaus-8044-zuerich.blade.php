@extends('web.layout.app')
@section('seo_title', 'Neubau Einfamilienhaus, Zürich')
@section('seo_description', 'Neubau Einfamilienhaus, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_neubau_efh_zuerich_1.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_neubau_einfamilienhaus__zitat_1.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_neubau_efh_zuerich_2.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_zuerich_3.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_zuerich_4.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_neubau_efh_zuerich_5.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_zuerich_6.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_neubau_efh_zuerich_7.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Einfamilienhaus<br>Zürich (2009–2010)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Privat" />
    <x-info archive="false" label="Architekt" description="Baumann Roserens Architekten AG, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
  </p>
</x-project>
@endsection