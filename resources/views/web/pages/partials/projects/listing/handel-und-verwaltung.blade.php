@extends('web.layout.app')
@section('seo_title', 'Industrie und Gewerbe')
@section('seo_description', 'Industrie und Gewerbe')
@section('page-header')
  <x-browse 
    prev="industrie-und-gewerbe" 
    title="Handel und Verwaltung" 
    next="fuersorge-und-gesundheit"
  />
@endsection
@section('content')
  <x-preview 
    slug="erweiterung-staatsarchiv-des-kantons-zuerich-2017-2019" 
    image="mmt_staatsarchiv_zuerich_1_vorschau.jpg" 
    text="Erweiterung Staatsarchiv des Kantons Zürich<br>Zürich (2017–2019)" 
    alt="Erweiterung Staatsarchiv des Kantons Zürich Zürich (2017–2019)"
  />
  <x-preview 
    slug="umbau-pavillon-und-einbau-jurierungsraeume-verwaltungszentrum-werd-8004-zuerich" 
    image="mmt_verwaltungszentrum_werd_1_vorschau.jpg" 
    text="Umbau Pavillon und Einbau Jurierungsräume Verwaltungszentrum Werd<br>Zürich (2014–2015)" 
    alt="Umbau Pavillon und Einbau Jurierungsräume Verwaltungszentrum Werd, Zürich (2014–2015)"
  />
@endsection