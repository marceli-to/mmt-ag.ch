@extends('web.layout.app')
@section('seo_title', 'Archiv')
@section('seo_description', 'Archiv')
@section('page-header')
  <x-browse 
    prev="wettbewerbe" 
    title="Archiv" 
    next="wohnen"
  />
@endsection
@section('content')
<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_mgh_giesserei.jpg" class="is-responsive" alt="MFH Giesserei, Ida-Streuli-Strasse, Winterthur" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>MFH Giesserei, Ida-Streuli-Strasse<br>Winterthur (2011–2013)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Wohnbaugenossenschaft GESEWO, Winterthur" />
          <x-info archive="true" label="Architekt" description="Galli Rudolf Architekten AG, Zürich" />
          <x-info archive="true" label="Wettbewerbs-Vergleichskosten / Controlling" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section>
<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_sanierung_gossau.jpg" class="is-responsive" alt="Sanierung altes Sekundarschulhaus, Gossau" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>Sanierung altes Sekundarschulhaus<br>Gossau (2010)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Oberstufenschulpflege Gossau, Gossau" />
          <x-info archive="true" label="Architekt" description="Rüegg Sieger Partner AG, Zürich" />
          <x-info archive="true" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section>
<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_umbau_altersheim_mittelleimbach.jpg" class="is-responsive" alt="Umbau Altersheim Mittelleimbach, Zürich" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>Umbau Altersheim Mittelleimbach<br>Zürich (2004–2005)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Altersheime c/o Amt für Hochbauten, Zürich" />
          <x-info archive="true" label="Architekt" description="Derendinger Jaillard Architekten, Zürich" />
          <x-info archive="true" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section>

<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_maennedorf.jpg" class="is-responsive" alt="Neubau Einfamilienhaus, 8708 Männedorf" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>Neubau Einfamilienhaus<br>Männedorf (2003–2004)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Privat" />
          <x-info archive="true" label="Architekt" description="moos.giuliani.herrmann.architekten, Uster" />
          <x-info archive="true" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section> 
<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_neubau_kilchberg_2005.jpg" class="is-responsive" alt="Neubau Einfamilienhaus, 8802 Kilchberg" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>Neubau Einfamilienhaus<br>Kilchberg (2003–2004)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Privat" />
          <x-info archive="true" label="Architekt" description="moos.giuilani.herrmann.architekten, Uster" />
          <x-info archive="true" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section> 
<section class="content-project-list">
  <div>
    <article class="text-media project-list-item">
      <figure class="text-media__image">
        <img src="/assets/media/mmt_schulhaus_schanz_rueti_vorschau.jpg" class="is-responsive" alt="Renovation und Erweiterung Schulhaus Rüti, Zürich (2003–2004)" width="1000" height="672">
      </figure>
      <div class="text-media__body">
        <p>Renovation und Erweiterung Schulhaus Schanz<br>Rüti (2003–2004)</p>
        <div>
          <x-info archive="true" label="Bauherrschaft" description="Oberstufenschulpflege Rüti, Rüti" />
          <x-info archive="true" label="Architekt" description="Felber Keller Lehmann, Zürich" />
          <x-info archive="true" label="Bauleitung" description="MMT AG Bauleiter und Architekten, Zürich" />
        </div>
      </div>
    </article>
  </div>
</section>

@endsection