@extends('web.layout.app')
@section('seo_title', 'Neubau Wohnüberbauung Schulsteig, Kilchberg')
@section('seo_description', 'Neubau Wohnüberbauung Schulsteig, Kilchberg')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulsteig_kilchberg_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_8.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_9.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_10.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulsteig_kilchberg_11.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulsteig_kilchberg_12.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Neubau Wohnüberbauung Schulsteig<br>Kilchberg (2021–2025)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="3A Immobilien" />
    <x-info archive="false" label="Architekt" description="felberfendt Architekten GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="12 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT0036_WO_Schulsteig_Kilchberg.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection