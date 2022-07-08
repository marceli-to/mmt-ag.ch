@extends('web.layout.app')
@section('seo_title', 'Umbau Pavillon und Einbau Jurierungsräume Verwaltungszentrum Werd, Zürich (2014–2015)')
@section('seo_description', 'Umbau Pavillon und Einbau Jurierungsräume Verwaltungszentrum Werd, Zürich (2014–2015)')
@section('page-header')
<x-button />
@endsection
@section('content')
<x-slider>
  <x-slider-image image="mmt_verwaltungszentrum_werd_1.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-first is-landscape" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_2.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_3.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_4.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_zitat.jpg" classes="is-portrait" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_5.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-portrait" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_6.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_7.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
  <x-slider-image image="mmt_verwaltungszentrum_werd_8.jpg" caption="Fotografie:|Roger Frei, Zürich" classes="is-landscape" />
</x-slider>
<x-project>
  <x-heading title="Umbau Pavillon und Einbau Jurierungsräume Verwaltungszentrum Werd<br>Zürich (2014–2015)" />
  <p>
    <x-info archive="false" label="Bauherrschaft" description="Immobilien Stadt Zürich c/o Amt für Hochbauten, Zürich" />
    <x-info archive="false" label="Architekt" description="Felber Keller Lehmann, dipl. Architekten ETH/SIA, Zürich" />
    <x-info archive="false" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
    <x-info archive="false" label="Baukosten" description="6 Mio." />
  </p>
  <p>
    <a href="/assets/downloads/MMT_Verwaltungszentrum_Werd.pdf" target="_blank" class="anchor-chevron">PDF</a>
  </p>
</x-project>
@endsection