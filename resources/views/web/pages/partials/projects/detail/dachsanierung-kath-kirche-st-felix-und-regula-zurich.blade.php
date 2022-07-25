@extends('web.layout.app')
@section('seo_title', 'Dachsanierung  Kath. Kirche St. Felix und Regula, Zürich')
@section('seo_description', 'Dachsanierung  Kath. Kirche St. Felix und Regula, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_kirche_st_felix_und_regula_1_vorschau.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_3_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_8.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_9.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kirche_st_felix_und_regula_10.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Dachsanierung  Kath. Kirche St. Felix und Regula<br>Zürich (2021–2022)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Kirchenpflege Kath. Kirche St. Felix und Regula, Zürich" />
    <x-info archive="false" label="Architekt" description="Architektur 10:8 Architekten GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="1 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/mmt_kirche_st_felix_und_regula_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection