@extends('web.layout.app')
@section('seo_title', 'Sanierung Siedlungen Sihlfeld I + II, Zürich')
@section('seo_description', 'Sanierung Siedlungen Sihlfeld I + II, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_sihlfeld_I_II_1.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-first is-landscape" />
  <x-slider-image image="mmt_sihlfeld_I_II_2.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-landscape" />
  <x-slider-image image="mmt_sihlfeld_I_II_3.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-landscape" />
  <x-slider-image image="mmt_sihlfeld_I_II_4.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-portrait" />
  <x-slider-image image="mmt_sihlfeld_I_II_5.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-portrait" />
  <x-slider-image image="mmt_sihlfeld_I_II_6.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-landscape" />
  <x-slider-image image="mmt_sihlfeld_I_II_7.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-landscape" />
  <x-slider-image image="mmt_sihlfeld_I_II_8.jpg" caption="Fotografie:|Walter Mair, Basel" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Sanierung Siedlungen Sihlfeld I + II<br>Zürich (2011–2012)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="ABZ Allgemeine Baugenossenschaft Zürich, Zürich" />
    <x-info archive="false" label="Architekt" description="Rolf Schaffner dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauherrenberatung / GU-Auschreibung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Generalunternehmer" description="Allreal Generalunternehmung AG, Glattpark" />
    <x-info archive="false" label="Baukosten" description="30 Mio." />
  </p>
</x-project>
@endsection