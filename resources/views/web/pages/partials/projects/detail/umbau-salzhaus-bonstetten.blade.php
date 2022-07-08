@extends('web.layout.app')
@section('seo_title', 'Umbau Salzhaus, Bonstetten')
@section('seo_description', 'Umbau Salzhaus, Bonstetten')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_salzhaus_bonstetten_1.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_2.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_3.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_4_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_5.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_6.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_7.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_8.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_salzhaus_bonstetten_9.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_10_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_11.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_12.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_salzhaus_bonstetten_13.jpg" caption="Fotografie:|Fotografie: Jürg Zimmermann, Zürich" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Umbau Salzhaus<br>Bonstetten (2020–2022)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Privat" />
    <x-info archive="false" label="Architekt" description="Rahel Lämmler, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
  </p>
  <p>
    <a href="/assets/downloads/mmt_salzhaus_bonstetten_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection