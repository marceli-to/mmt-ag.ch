@extends('web.layout.app')
@section('seo_title', 'Büroausbau 4.OG Wintower, Winterthur (2019)')
@section('seo_description', '')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_bueroausbau_wintower_winterthur_8.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Büroausbau 4.OG Wintower<br>Winterthur (2019)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Terresta Immobilien- und Verwaltungs AG" />
    <x-info archive="false" label="Architekt / Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
  </p>
</x-project>
@endsection