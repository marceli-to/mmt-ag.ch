@extends('web.layout.app')
@section('seo_title', 'Schulhauserweiterung Wisacher, Hochfelden (2014–2015)')
@section('seo_description', 'Schulhauserweiterung Wisacher, Hochfelden (2014–2015)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_1.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_2.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_3.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_4.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_5.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_6.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_7.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_8.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_9.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_10.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_11.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wisacher_hochfelden_12.jpg" caption="Fotografie:|Lucas Peters, Zürich" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Schulhauserweiterung Wisacher<br>Hochfelden (2014–2015)" />
    <p>
    <x-info archive="false" label="Bauherrschaft" description="Primarschulgemeinde Hochfelden, Hochfelden" />
    <x-info archive="false" label="Architekt" description="RWPA Architekten, Winterthur" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="7 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Primarschulanlage_Wisacher.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection