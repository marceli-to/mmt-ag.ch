<div class="site-menu js-menu">
  <a href="javascript:;" class="btn-menu-hide js-menu-btn" title="Menü verbergen"></a>
  <nav>
    <ul>
      <li>
        <a href="javascript:;" class="{{ request()->routeIs('page.about*') ? 'is-active' : '' }} js-sub-menu-btn">Über uns</a>
        <ul class="js-sub-menu" style="display:none">
          <li>
            <a href="{{ route('page.about_team') }}" class="{{ request()->routeIs('page.about_team') ? 'is-active' : '' }}" title="Team">Team</a>
          </li>
          <li>
            <a href="{{ route('page.about_philosophy') }}" class="{{ request()->routeIs('page.about_philosophy') ? 'is-active' : '' }}" title="Philosophie">Philosophie</a>
          </li>
        </ul>        
      </li>
      <li>
        <a href="javascript:;" class="{{ request()->routeIs('page.project_*') ? 'is-active' : '' }} js-sub-menu-btn">Projekte</a>
        <ul class="js-sub-menu" style="display:none">
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'wohnen']) }}" title="Projekte - Wohnen">Wohnen</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'unterricht-bildung-forschung']) }}" title="Projekte - Unterricht, Bildung, Forschung">Unterricht, Bildung, Forschung</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'industrie-und-gewerbe']) }}" title="Projekte - Industrie und Gewerbe">Industrie und Gewerbe</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'handel-und-verwaltung']) }}" title="Projekte - Handel und Verwaltung">Handel und Verwaltung</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'fuersorge-und-gesundheit']) }}" title="Projekte - Fürsorge und Gesundheit">Fürsorge und Gesundheit</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'verkehr-und-infrastruktur']) }}" title="Projekte - Verkehr und Infrastruktur">Verkehr und Infrastruktur</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'wettbewerbe']) }}" title="Projekte - Wettbewerbe">Wettbewerbe</a>
          </li>
          <li>
            <a href="{{ route('page.project_listing', ['slug' => 'archiv']) }}" title="Projekte - Archiv">Archiv</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ route('page.contact') }}" title="Kontakt" class="{{ request()->routeIs('page.contact') ? 'is-active' : '' }} js-btn-contact">Kontakt</a>
      </li>
    </ul>
  </nav>
</div>