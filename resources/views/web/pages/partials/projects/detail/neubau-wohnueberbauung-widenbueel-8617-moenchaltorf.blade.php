@extends('web.layout.app')
@section('seo_title', 'Neubau Wohnüberbauung Widenbüel, Mönchaltorf (2012–2014)')
@section('seo_description', 'Neubau Wohnüberbauung Widenbüel, Mönchaltorf (2012–2014)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_widenbueel_1.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_widenbueel_2.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_widenbueel_3.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_widenbueel_4.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_widenbueel_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_widenbueel_5.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_widenbueel_6.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Neubau Wohnüberbauung Widenbüel<br>Mönchaltorf (2012–2014)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Wohnbaugenossenschaft Gewo Züri Ost, Uster" />
    <x-info archive="false" label="Architekt" description="ARGE architektick ag und Scherrer Valentin, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="19 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Wohnueberbauung_Widenbueel.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection