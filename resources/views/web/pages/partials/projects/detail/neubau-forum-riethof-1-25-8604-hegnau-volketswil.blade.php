@extends('web.layout.app')
@section('seo_title', 'Neubau Forum Riethof 1-25, Hegnau-Volketswil')
@section('seo_description', 'Neubau Forum Riethof 1-25, Hegnau-Volketswil')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="MMT_Riethof_Volketswil_1.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="MMT_Riethof_Volketswil_2.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="MMT_Riethof_Volketswil_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="MMT_Riethof_Volketswil_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_riethof_volketswil_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="MMT_Riethof_Volketswil_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="MMT_Riethof_Volketswil_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="MMT_Riethof_Volketswil_7.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-portrait" />
  <x-slider-image image="MMT_Riethof_Volketswil_8.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-portrait" />
  <x-slider-image image="MMT_Riethof_Volketswil_9.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="MMT_Riethof_Volketswil_10.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Forum Riethof 1-25<br>Hegnau-Volketswil (2018)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="ASIG Wohngenossenschaft, Zürich" />
    <x-info archive="false" label="Architekt" description="architektick ag Tina Arndt & Daniel Fleischmann, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="1.5 Mio." />
  </p>
</x-project>
@endsection