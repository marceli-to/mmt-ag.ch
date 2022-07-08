@extends('web.layout.app')
@section('seo_title', 'Industrie und Gewerbe')
@section('seo_description', 'Industrie und Gewerbe')
@section('page-header')
  <x-browse 
    prev="handel-und-verwaltung" 
    title="Fürsorge und Gesundheit" 
    next="verkehr-und-infrastruktur"
  />
@endsection
@section('content')
  <x-preview 
    slug="dachsanierung-kath-kirche-st-felix-und-regula-zurich" 
    image="mmt_kirche_st_felix_und_regula_1_vorschau.jpg" 
    text="Dachsanierung Kath. Kirche St. Felix und Regula<br>Zürich (2021–2022)" 
    alt="Dachsanierung Kath. Kirche St. Felix und Regula, Zürich (2021–2022)"
  />
  <x-preview 
    slug="puk-psychiatrische-universitaetsklinik-zuerich-2016" 
    image="mmt_psychiatrische_universitaetsklinik_zuerich_1_vorschau.jpg" 
    text="Einbau einer Jugendpsychiatrie sowie Bereitstellen von Schul- und Therapieräumen,<br>PUK Psychiatrische Universitätsklinik<br>Zürich (2016)" 
    alt="Einbau einer Jugendpsychiatrie sowie Bereitstellen von Schul- und Therapieräumen, PUK Psychiatrische Universitätsklinik, Zürich (2016)"
  />
  <x-preview 
    slug="erweiterung-mitte-schulthess-klinik-zuerich-2012-2016" 
    image="mmt_schulthess_klinik_8_vorschau.jpg" 
    text='Erweiterung «Mitte» Schulthess Klinik<br>Zürich (2012–2016)' 
    alt='Erweiterung «Mitte» Schulthess Klinik, Zürich (2012–2016)'
  />
  <x-preview 
    slug="neubau-kinderheim-sunnemaetteli-8344-baeretswil" 
    image="mmt_kinderheim_sunnemaetteli_baeretswil_3_vorschau.jpg" 
    text="Neubau Kinderheim Sunnemätteli<br>Bäretswil (2008–2009)" 
    alt="Neubau Kinderheim Sunnemätteli, Bäretswil (2008–2009)"
  />
@endsection