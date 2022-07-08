@extends('web.layout.app')
@section('seo_title', 'Instandsetzung Schulanlage Bungertwies, Zürich (2007)')
@section('seo_description', 'Instandsetzung Schulanlage Bungertwies, Zürich (2007)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_bungertwies_1.jpg" caption="" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulanlage_bungertwies_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_bungertwies_2.jpg" caption="" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_bungertwies_3.jpg" caption="" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_bungertwies_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_bungertwies_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_bungertwies_6.jpg" caption="" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Instandsetzung Schulanlage Bungertwies<br>Zürich (2007)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Immobilien Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Felber Keller Lehmann, dipl. Architekten ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="4 Mio." />
  </p>
</x-project>
@endsection