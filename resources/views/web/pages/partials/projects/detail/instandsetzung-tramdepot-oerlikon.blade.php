@extends('web.layout.app')
@section('seo_title', 'Instandsetzung Tramdepot Oerlikon, Zürich')
@section('seo_description', 'Instandsetzung Tramdepot Oerlikon, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_zitat_1.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_zitat_2.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_tramdepot_oerlikon_zuerich_8.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Instandsetzung Tramdepot Oerlikon<br>Zürich" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Verkehrsbetriebe Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="40 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Tramdepot_Oerlikon.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection