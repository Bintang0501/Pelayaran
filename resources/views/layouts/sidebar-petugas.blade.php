      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{ url('') }}/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
            </div>
          </div>

          <li class="nav-header">HOME</li>
          <li class="nav-item menu-open">
            <a href="{{ url('/petugas/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/petugas/buku_pelaut') }}" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
              Buku Pelaut
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/petugas/surat_mohon') }}" class="nav-link">
              <i class="nav-icon fas fa-file-import"></i>
              <p>
              Permohonan Surat Keterangan Masa Berlayar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/petugas/penyijilan') }}" class="nav-link">
              <i class="nav-icon fas fa-paste"></i>
              <p>
              Penyijilan Mustering
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->