@extends('web.layout.app')
@section('seo_title', 'Erweiterung Staatsarchiv des Kantons Zürich, Zürich (2017–2019)')
@section('seo_description', 'Erweiterung Staatsarchiv des Kantons Zürich, Zürich (2017–2019)')
@section('page-header')
<x-button />
@endsection
@section('content')

<x-slider>
  <x-slider-image image="mmt_staatsarchiv_zuerich_1.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_zitat_1.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_5.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_zitat_2.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_6.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_staatsarchiv_zuerich_8.jpg" caption="Fotografie:|Andrea Helbling, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Erweiterung Staatsarchiv des Kantons Zürich<br>Zürich (2017–2019)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Direktion der Justiz und des Inneren c/o Baudirektion Kanton Zürich" />
    <x-info archive="false" label="Architekt" description="architektick ag Tina Arndt & Daniel Fleischmann, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="25 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Staatsarchiv_Zuerich.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection