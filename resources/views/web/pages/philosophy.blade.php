@extends('web.layout.app')
@section('seo_title', 'Philosophie')
@section('seo_description', 'Unsere Spezialität sind architektonisch und technisch anspruchsvolle Hochbauten.')
@section('page-header')
<nav class="browse">
  <a href="{{ route('page.about_team') }}" class="btn-browse is-prev"></a>
  <h1>Philosophie</h1>
  <a href="{{ route('page.about_team') }}" class="btn-browse is-next"></a>
</nav>
@endsection
@section('content')
<section class="content">
  <div>
    <article class="text">
      <p>Unsere Spezialität sind architektonisch und technisch anspruchsvolle Hochbauten. Wir sorgen dafür, dass Ihr Bauprojekt nach Ihren Vorstellungen realisiert wird. Dabei garantieren wir in allen Bereichen Transparenz und geben Ihnen die Sicherheit, dass Kosten, Termine und Qualität eingehalten werden.</p>
      <p>Mit unseren Kundinnen und Kunden teilen wir die Begeisterung für gute Architektur; wir verstehen es, diese konkret umzusetzen. Die Sprache unserer Projektpartner verstehen wir genauso, wie die Sprache auf der Baustelle. Erfolgreich ergänzen wir mit unserer Fachkenntnis Teams beider Seiten.</p>
      <p>
        <a href="/assets/downloads/MMT0038_Broschuere.pdf" target="_blank" title="Download MMT-Broschüre">
          <img src="/assets/media/MMT0038_Broschuere.jpg" height="1414" width="1000" class="half-width">
        </a>
      </p>
      <p>
        <a href="/assets/downloads/MMT0038_Broschuere.pdf" target="_blank" title="Download MMT-Broschüre" class="anchor-chevron">MMT-Broschüre</a><br>
      </p>
    </article>
  </div>
</section>
@endsection