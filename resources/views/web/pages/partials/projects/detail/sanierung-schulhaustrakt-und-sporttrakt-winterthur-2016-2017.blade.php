@extends('web.layout.app')
@section('seo_title', 'Sanierung Schulhaustrakt und Sporttrakt Wülflingen, Winterthur (2016/2017)')
@section('seo_description', 'Sanierung Schulhaustrakt und Sporttrakt Wülflingen, Winterthur (2016/2017)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_1.jpg" caption="Fotografie:|Rudolf Moser, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_2.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_3.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_4.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_5.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_6.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_schulhaus_wuelflingerstrasse_winterthur_7.jpg" caption="Fotografie:|Pit Brunner, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Sanierung Schulhaustrakt und Sporttrakt Wülflingen<br>Winterthur (2016/2017)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Stadt Winterthur, Departement Schule und Sport, Winterthur" />
    <x-info archive="false" label="Architekt" description="Rudolf Moser dipl. Architekt ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="4 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Schulanlage_Wuelflingen.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection