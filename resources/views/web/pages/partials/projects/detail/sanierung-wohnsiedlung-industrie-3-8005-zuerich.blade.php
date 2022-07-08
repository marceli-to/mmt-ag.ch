@extends('web.layout.app')
@section('seo_title', 'Sanierung Wohnsiedlung Industrie 3, Zürich')
@section('seo_description', 'Sanierung Wohnsiedlung Industrie 3, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_5.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_1.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_2.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_3.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_4.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_wohnsiedlung_industrie_3_6.jpg" caption="Fotografie:|Theodor Stalder, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung Wohnsiedlung Industrie 3<br>Zürich (2011)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="BEP Baugenossenschaft des eidgenössischen Personals, Zürich" />
    <x-info archive="false" label="Generalplaner" description="GP Generalplaner AG, Zürich" />
    <x-info archive="false" label="Architekt" description="Rolf Schaffner dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="8 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Wohnsiedlung_Industrie_3.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection