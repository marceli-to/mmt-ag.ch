@extends('web.layout.app')
@section('seo_title', 'Sanierung Schulhaus Bachtelstrasse, Winterthur')
@section('seo_description', 'Sanierung Schulhaus Bachtelstrasse, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_1.jpg" caption="Fotografie:|Architekt Rudolf Mooser, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_2.jpg" caption="Fotografie:|Architekt Rudolf Mooser, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_3.jpg" caption="Fotografie:|Architekt Rudolf Mooser, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_4_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_5.jpg" caption="Fotografie:|Architekt Rudolf Mooser, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_bachtelstrasse_6.jpg" caption="Fotografie:|Architekt Rudolf Mooser, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung Schulhaus Bachtelstrasse<br>Winterthur" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Winterthur, Departement Schule und Sport, Winterthur" />
    <x-info archive="false" label="Architekt" description="Rudolf Moser dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="2.5 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/mmt_schulhaus_bachtelstrasse_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection