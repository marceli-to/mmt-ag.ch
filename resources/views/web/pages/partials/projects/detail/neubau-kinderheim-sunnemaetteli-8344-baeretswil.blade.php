@extends('web.layout.app')
@section('seo_title', 'Neubau Kinderheim Sunnemätteli, Bäretswil')
@section('seo_description', 'Neubau Kinderheim Sunnemätteli, Bäretswil')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_1.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_2.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_3.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_4.jpg" caption="Fotografie:|Menga von Sprecher, Maienfeld" classes="is-portrait" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_5.jpg" caption="Fotografie:|Menga von Sprecher, Maienfeld" classes="is-portrait" />
  <x-slider-image image="mmt_kinderheim_sunnemaetteli_baeretswil_6.jpg" caption="Fotografie:|Menga von Sprecher, Maienfeld" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Neubau Kinderheim Sunnemätteli<br>Bäretswil (2008-2009)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Genossenschaft Heilsarmee, Sozialwerk, Bern" />
    <x-info archive="false" label="Architekt" description="architektick ag Tina Arndt & Daniel Fleischmann, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="9 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Sunnemaetteli.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection