@extends('web.layout.app')
@section('seo_title', 'Home')
@section('seo_description', '')
@section('content')
<section class="visual">
  <figure>
    <img src="/assets/media/home/mmt_ag_bauleiter_architekten_{{mt_rand(1,8)}}.jpg" width="1400" height="934" class="is-responsive">
    <figcaption class="quote">
      <div class="quote__text">Wer aufhört, besser zu werden, hat aufgehört, gut zu sein.</div>
      <div class="quote__author">Philip Rosenthal</div>
    </figcaption>
  </figure>
</section>
<footer>
  <address>
    <div>
      <p><strong>MMT AG<br>Bauleiter und Architekten</strong></p>
      <p>Hohlstrasse 36<br>8004 Zürich<br>Telefon 052 235 08 80<br><a href="mailto:info@mmt-ag.ch">info@mmt-ag.ch</a></p>
    </div>
  </address>
</footer>
@endsection