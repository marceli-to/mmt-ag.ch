@include('web.layout.partials.header')
<main role="main" class="site {{ request()->routeIs('page.project_detail') ? 'is-project-detail' : '' }}">
  @yield('content')
</main>
@include('web.layout.partials.footer')