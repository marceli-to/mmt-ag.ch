@extends('web.layout.app')
@section('seo_title', 'Erneuerung und Einhausung Tramaussenwaschanlage, Zürich')
@section('seo_description', 'Erneuerung und Einhausung Tramaussenwaschanlage, Zürich')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_2_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_tramaussenwaschanlage_vbz_7_zitat.jpg"" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Erneuerung und Einhausung Tramaussenwaschanlage<br>Schlieren (2020–2022)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Verkehrsbetriebe Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="6 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/mmt_tramaussenwaschanlage_vbz_referenzblatt.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection