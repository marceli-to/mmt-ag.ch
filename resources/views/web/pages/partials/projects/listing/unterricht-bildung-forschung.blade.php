@extends('web.layout.app')
@section('seo_title', 'Unterricht, Bildung, Forschung')
@section('seo_description', 'Unterricht, Bildung, Forschung')
@section('page-header')
  <x-browse 
    prev="wohnen" 
    title="Unterricht, Bildung, Forschung" 
    next="industrie-und-gewerbe"
  />
@endsection
@section('content')
  <x-preview 
    slug="sanierung-schulhaus-bachtelstrasse-winterthur" 
    image="mmt_schulhaus_bachtelstrasse_3_vorschau.jpg" 
    text="Sanierung Schulhaus Bachtelstrasse<br>Winterthur (2019–2021)" 
    alt="Sanierung Schulhaus Bachtelstrasse, Winterthur (2019–2021)"
  />

  <x-preview 
    slug="neubau-schulanlage-pfingstweid-zuerich-2017-2019" 
    image="mmt_schulanlage_pfingstweid_zuerich_12_vorschau.jpg" 
    text="Neubau Schulanlage Pfingstweid<br>Zürich (2017–2019)" 
    alt="Neubau Schulanlage Pfingstweid, Zürich (2017–2019)"
  />
  <x-preview 
    slug="erweiterung-schulanlage-hagen-illnau-2016-2018" 
    image="mmt_schulanlage_hagen_illnau_10_vorschau.jpg" 
    text="Erweiterung Schulanlage Hagen<br>Illnau (2016–2018)" 
    alt="Erweiterung Schulanlage Hagen, Illnau (2016–2018)"
  />  
  <x-preview 
    slug="sanierung-schulhaustrakt-und-sporttrakt-winterthur-2016-2017" 
    image="mmt_schulhaus_wuelflingerstrasse_winterthur_1_vorschau.jpg" 
    text="Sanierung Schulhaustrakt und Sporttrakt Wülflingen<br>Winterthur (2016–2017)" 
    alt="Sanierung Schulhaustrakt und Sporttrakt Wülflingen, Winterthur (2016–2017)"
  />
  <x-preview 
    slug="schulhauserweiterung-wisacher-hochfelden-2014-2015" 
    image="mmt_schulhaus_wisacher_hochfelden_3_vorschau.jpg" 
    text="Schulhauserweiterung Wisacher<br>Hochfelden (2014–2015)" 
    alt="Schulhauserweiterung Wisacher, Hochfelden (2014–2015)"
  />
  <x-preview 
    slug="gesamtsanierung-schulanlage-huben-8500-frauenfeld" 
    image="mmt_schulhaus_huben_frauenfeld_9_vorschau.jpg" 
    text="Gesamtsanierung Schulanlage Huben<br>Frauenfeld (2011–2012)" 
    alt="Gesamtsanierung Schulanlage Huben, Frauenfeld (2011–2012)"
  />
  <x-preview 
    slug="instandsetzung-schulanlage-bungertwies-8044-zuerich" 
    image="mmt_schulhaus_bungertwies_3_vorschau.jpg" 
    text="Instandsetzung Schulanlage Bungertwies<br>Zürich (2007)" 
    alt="Instandsetzung Schulanlage Bungertwies, Zürich (2007)"
  />
  <x-preview 
    slug="umbau-und-sanierung-schulhaus-grueze-8600-duebendorf" 
    image="mmt_schulhaus_grueze_duebendorf_12_vorschau.jpg" 
    text="Umbau und Sanierung Schulhaus Grüze<br>Dübendorf (2006–2007)" 
    alt="Umbau und Sanierung Schulhaus Grüze, Dübendorf (2006–2007)"
  />
  <x-preview 
    slug="neubau-schulhaus-eichhoelzli-8192-glattfelden" 
    image="mmt_schulhaus_eichhoelzli_glattfelden_7_vorschau.jpg" 
    text="Neubau Schulhaus Eichhölzli<br>Glattfelden (2004–2005)" 
    alt="Neubau Schulhaus Eichhölzli, Glattfelden (2004–2005)"
  />
@endsection