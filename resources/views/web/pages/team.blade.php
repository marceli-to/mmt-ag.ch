@extends('web.layout.app')
@section('seo_title', 'Team')
@section('seo_description', '')
@section('page-header')
  <nav class="browse">
    <a href="{{ route('page.about_philosophy') }}" class="btn-browse is-prev"></a>
      <h1>Team</h1>
    <a href="{{ route('page.about_philosophy') }}" class="btn-browse is-next"></a>
  </nav>
@endsection
@section('content')
@include('web.pages.partials.team.treichler')
@include('web.pages.partials.team.mooser')
@include('web.pages.partials.team.baser')
@include('web.pages.partials.team.buser')
@include('web.pages.partials.team.huber')
@include('web.pages.partials.team.sager')
@include('web.pages.partials.team.misteli')
@include('web.pages.partials.team.steiger')
@include('web.pages.partials.team.vogler')
@include('web.pages.partials.team.werder')

{{-- <section class="content-team">
  <div>
    <article class="text jobs">
      <div>
          <h2>Werde Teil unseres Teams und schicke uns Deine Bewerbung</h2>
          <p>Für unser kleines Team suchen wir per 1. November 2020 oder nach Vereinbarung eine / n</p>
          <p><strong>Sachbearbeiter / in Projektassistenz (60 – 80 %)</strong></p>
          <div class="btn-wrapper">
            <a href="javascript:;" class="btn-cv js-btn-cv" data-target="job"></a>
          </div>
      </div>
    </article>
    <div class="jobs__detail" data-cv="job" style="display:none">
      <p>Als zuverlässige Unterstützung entlasten Sie unsere Projekt- und Bauleiter in ihren Alltagsaufgaben und helfen mit, die Qualität, die Termintreue und Kostenkontrolle zu bewahren. Sie kümmern sich unter anderem um Baubuchhaltungen, Protokollierung von Bausitzungen, assistieren bei Ausschreibungen sowie Offert- und Vertragswesen und sind verantwortlich für allgemeine Administrationsarbeiten. Die Aufgaben sind je nach Engagement und Potenzial sehr ausbaufähig.</p>
      <p>Zusätzlich zur kaufmännischen Ausbildung bringen Sie Erfahrungen in der Baubranche mit und sind eine unkomplizierte, kundenorientierte Persönlichkeit, die gerne selbstständig und sorgfältig arbeitet und sich in einem lebhaften Umfeld wohlfühlt. Neben stilsicherem Deutsch erwarten wir gute IT-Kenntnisse (MS-Office) und von Vorteil auch gute Kenntnisse über Messerli Bauadministration und InDesign.</p>
      <p>Wir freuen uns auf Ihre vollständigen und aussagekräftigen Bewerbungsunterlagen an:</p>
      <p>MMT AG Bauleiter und Architekten<br>Frau Alexandra Pongratz<br>Hohlstrasse 36, 8004 Zürich</p>
      oder per Mail: <a href="mailto:info@mmt-ag.ch">info@mmt-ag.ch</a>.
    </div>
  </div>
</section> --}}

@endsection