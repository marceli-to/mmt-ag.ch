@extends('web.layout.app')
@section('seo_title', 'Industrie und Gewerbe')
@section('seo_description', 'Industrie und Gewerbe')
@section('page-header')
  <x-browse 
    prev="verkehr-und-infrastruktur" 
    title="Wettbewerbe" 
    next="archiv"
  />
@endsection
@section('content')
<x-preview 
  slug="neubau-betreuungshaus-schulanlage-rueterwis-zollikon" 
  image="mmt_schulanlage_rueterwies_zollikon_vorschau_2.jpg" 
  text="Neubau Betreuungshaus, Schulanlage Rüterwis<br>Projekt «Güstl»<br>Zollikon (2019)" 
  alt="Neubau Betreuungshaus, Schulanlage Rüterwis, Projekt «Güstl», Zollikon (2019)"
/>

<x-preview 
  slug="bundesbasis-flugplatz-dubendorf-dubendorf-2018" 
  image="mmt_bundesbasis_flugplatz_duebendorf_1_vorschau.jpg" 
  text="Bundesbasis Flugplatz Dübendorf<br>Dübendorf (2018)" 
  alt="Bundesbasis Flugplatz Dübendorf, Dübendorf (2018)"
/>

<x-preview 
  slug="neubau-depot-hard-tramdepot-und-wohnsiedlung-zurich-2015" 
  image="mmt_neubau_depot_hard_zuerich_1_vorschau.jpg" 
  text="Neubau Depot Hard, Tramdepot und Wohnsiedlung<br>Zürich (2015)" 
  alt="Neubau Depot Hard, Tramdepot und Wohnsiedlung, Zürich (2015)"
/>



@endsection