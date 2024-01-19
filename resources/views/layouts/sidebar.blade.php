 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center">
      <span class="brand-text font-weight-light">SIP <p>(Sistem Informasi Pelayaran)</p></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        @if (Auth::user()->role == 'admin')
            @include('layouts.sidebar-admin')
        @elseif (Auth::user()->role == 'petugas')
            @include('layouts.sidebar-petugas')
        @elseif (Auth::user()->role == 'kepala')
            @include('layouts.sidebar-kepala')
        @elseif (Auth::user()->role == 'warga')
            @include('layouts.sidebar-warga')
        @endif

    </div>
    <!-- /.sidebar -->
  </aside>