@extends('web.layout.app')
@section('seo_title', 'Umbau Schulhaus Römerstrasse, Winterthur')
@section('seo_description', 'Umbau Schulhaus Römerstrasse, Winterthur')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_talackerstrasse_01.jpg" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_02.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_03.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_04.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_05.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_06.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_07.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_talackerstrasse_08.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Umbau Schulhaus Talackerstrasse<br>Winterthur (2023)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Winterthur, Departement Schule und Sport, Winterthur" />
    <x-info archive="false" label="Architekt" description="Rudolf Moser dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="6 Mio." />
  </p>
</x-project>
@endsection