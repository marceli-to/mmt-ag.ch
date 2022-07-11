@extends('web.layout.app')
@section('seo_title', 'Industrie und Gewerbe')
@section('seo_description', 'Industrie und Gewerbe')
@section('page-header')
  <x-browse 
    prev="unterricht-bildung-forschung" 
    title="Industrie und Gewerbe" 
    next="handel-und-verwaltung"
  />
@endsection
@section('content')
  <x-preview 
    slug="sanierung-und-neunutzung-reithalle-st-moritz" 
    image="mmt_reithalle_st_moritz_1_vorschau.jpg" 
    text="Sanierung und Neunutzung Reithalle<br>St. Moritz (2021–2025)" 
    alt="Sanierung und Neunutzung Reithalle St. Moritz (2021–2025)"
  />
  <x-preview 
    slug="neubau-diamant-keller-ag-winterthur" 
    image="mmt_Keller_Diamant_1_vorschau.jpg" 
    text="Neubau Keller Druckmesstechnik AG<br>Winterthur (2021–2025)" 
    alt="Neubau Keller Druckmesstechnik AG, Winterthur (2021–2025)"
  />
  <x-preview 
    slug="bueroausbau-4og-wintower-8400-winterthur" 
    image="mmt_bueroausbau_wintower_winterthur_vorschau.jpg" 
    text="Büroausbau 4.OG Wintower<br>Winterthur (2019)" 
    alt="Büroausbau 4.OG Wintower, Winterthur (2019)"
  />
@endsection