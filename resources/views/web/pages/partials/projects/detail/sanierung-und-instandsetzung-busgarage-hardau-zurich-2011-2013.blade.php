@extends('web.layout.app')
@section('seo_title', 'Sanierung und Instandsetzung Busgarage Hardau, Zürich (2011 – 2013)')
@section('seo_description', 'Sanierung und Instandsetzung Busgarage Hardau, Zürich (2011 – 2013)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_busgarage_hardau_zuerich_1.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_zitat_1.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_2.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_3.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_4.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_zitat_2.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_5.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_6.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_7.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_8.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_9.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_busgarage_hardau_zuerich_10.jpg" caption="Fotografie:|Ernst & Humbel GmbH, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title='Sanierung und Instandsetzung Busgarage Hardau<br>Zürich (2011 – 2013)' />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Verkehrsbetriebe Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="CHF 22 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Hardau.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection