@extends('web.layout.app')
@section('seo_title', 'Gesamtsanierung Schulanlage Huben, Frauenfeld (2011–2012)')
@section('seo_description', 'Gesamtsanierung Schulanlage Huben, Frauenfeld (2011–2012)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_1.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_2.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_3.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_4.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_5.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_6.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_7.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_8.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_9.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_huben_frauenfeld_10.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Gesamtsanierung Schulanlage Huben<br>Frauenfeld (2011–2012)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Primarschulgemeinde Frauenfeld, Frauenfeld" />
    <x-info archive="false" label="Architekt" description="Felber Keller Lehmann, dipl. Architekten ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="13 Mio." />
  </p>
</x-project>
@endsection