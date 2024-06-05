<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | SneaksAvenue</title>

  {{-- CSS --}}
  @include('backend.layouts.style')
  @stack('style')
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('backend.layouts.header')
      <div class="main-sidebar sidebar-style-2">
      @include('backend.layouts.aside')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('main')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>

      @include('backend.layouts.footer')
    </div>
  </div>

  {{-- JS --}}
  @include('backend.layouts.script')
  @stack('script')

  <!-- Page Specific JS File -->
</body>
</html>
