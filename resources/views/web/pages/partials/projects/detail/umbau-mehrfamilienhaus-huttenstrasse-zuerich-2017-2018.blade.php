@extends('web.layout.app')
@section('seo_title', 'Umbau Mehrfamilienhaus Huttenstrasse Zürich (2017–2018)')
@section('seo_description', 'Umbau Mehrfamilienhaus Huttenstrasse Zürich (2017–2018)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_mfh_huttenstrasse_3.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_mfh_huttenstrasse_1.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_2.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_4.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_5.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_6.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_mfh_huttenstrasse_7.jpg" caption="Fotografie:|Jürg Zimmermann, Zürich" classes="is-portrait" />
</x-slider>
<x-project>
  <x-heading title="Umbau Mehrfamilienhaus Huttenstrasse<br>Zürich (2017–2018)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Liegenschaftenverwaltung Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Ernst & Humbel GmbH, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="1.5 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_MFH_Huttenstrasse.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection