@include('include.header')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('include.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
          <!-- Navbar -->

        @include('include.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
            @yield('content')
          <!-- Content wrapper -->
        
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

@include('include.footer')
