@extends('web.layout.app')
@section('seo_title', 'Neubau Schulhaus Eichhölzli, Glattfelden')
@section('seo_description', 'Neubau Schulhaus Eichhölzli, Glattfelden')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_1.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_2.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_3.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_4.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_5.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_7.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_8.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_9.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_eichhoelzli_glattfelden_10.jpg" caption="Fotografie: Dominique M. Wehrli, Dietikon" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Neubau Schulhaus Eichhölzli<br>Glattfelden (2004–2005)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Schulgemeinde Glattfelden, Glattfelden" />
    <x-info archive="false" label="Architekt" description="Peter Kunz Architektur GmbH, Winterthur" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="10 Mio." />
  </p>
</x-project>
@endsection