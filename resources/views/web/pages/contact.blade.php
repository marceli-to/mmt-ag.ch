@extends('web.layout.app')
@section('seo_title', 'Kontakt')
@section('seo_description', '')
@section('content')
@section('page-header')
<div class="page-header hide-sm">
  <h1>Kontakt</h1>
</div>
@endsection
<section class="content-contact">
  <div>
    <article class="text-media contact">
      <figure class="text-media__image">
        <a href="https://goo.gl/maps/6GUJrSwm8Bhf6jqZA" title="Google Maps öffnen" target="_blank" rel="noopener">
          <img src="/assets/img/mmt-ag-map.svg" class="is-responsive">
        </a>
      </figure>
      <div class="text-media">
        <address>
          <p>MMT AG<br>Bauleiter und Architekten</p>
          <p>Hohlstrasse 36<br>8004 Zürich<br>T 052 235 08 80<br><a href="mailto:info@mmt-ag.ch">info@mmt-ag.ch</a></p>
        </address>
        <a href="https://goo.gl/maps/6GUJrSwm8Bhf6jqZA" title="Google Maps öffnen" target="_blank" rel="noopener" class="anchor-chevron">
          Google Maps
        </a>
      </div>
    </article>
  </div>
</section>
{{-- <section class="content-contact">
  <div>
    <article class="text-media job">
      <div class="text-media__body">
        <h3>Jobs</h3>
        <p><a href="/assets/downloads/MMT_Job_Sachbearbeiter_Projektassistenz.pdf" class="anchor-chevron" target="_blank" title="Sachbearbeiter / in Projektassistenz (60 – 80 %)">Sachbearbeiter / in Projektassistenz (60 – 80 %)</a></p>
      </div>
    </article>
  </div>
</section> --}}
<section class="content-contact">
  <div>
    <article class="text-media contact">
      <div class="text-media__body">
        <h3>Gestaltung</h3>
        <p><a href="https://wbg.ch" class="anchor-chevron" target="_blank" rel="noopener" title="wbg.ch">wbg.ch, Zürich</a></p>
        <h3>Programmierung</h3>
        <p><a href="https://marceli.to" class="anchor-chevron" target="_blank" rel="noopener" title="marceli.to">marceli.to, Winterthur</a></p>
      </div>
    </article>
  </div>
</section>
<section class="content-contact">
  <div>
    <article class="text-media imprint">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_kontakt_fiat.jpg" class="is-responsive" width="1076" height="720">
      </figure>
      <div class="text-media">
        <h3>Impressum</h3>
        <p>Verwaltungsrat:<br>Pascal Mooser, Verwaltungsratspräsident<br>Marco Treichler, Vizepräsident</p>
        <p>Inhaber / Geschäftsleitung:<br>Marco Treichler<br>Pascal Mooser</p>
        <p>UID:<br>CHE-107.938.043</p>
        <p>MWST-Nummer:<br>CHE-107.938.043 MWST</p>
        <p>IBAN:<br>CH77 0025 7257 7917 2001 N</p>
      </div>
    </article>
  </div>
</section>
@endsection