<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @if (auth()->user()->level == 'masyarakat')
        <a href="{{ route('dashboard.masyarakat') }}" class="brand-link">
        @elseif(auth()->user()->level == 'admin')
            <a href="{{ route('dashboard.admin') }}" class="brand-link">
            @elseif(auth()->user()->level == 'petugas')
                <a href="{{ route('dashboard.petugas') }}" class="brand-link">
    @endif
    <img src="{{ asset('adminlte/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">
        @if (auth()->user()->level == 'petugas')
            <a href="/dashboard/petugas">{{ Auth::user()->name }}</a>
        @elseif (auth()->user()->level == 'admin')
            <a href="/dashboard/admin">{{ Auth::user()->name }}</a>
        @elseif (auth()->user()->level == 'masyarakat')
            <a href="/dashboard/masyarakat">{{ Auth::user()->name }}</a>
        @endif
    </span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a href="/user" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Data User
                            </p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a href="/barang" class="nav-link">
                            <i class="nav-icon fas fa-cube"></i>
                            <p>
                                Data Barang
                            </p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->level == 'petugas')
                    <li class="nav-item">
                        <a href="/barang" class="nav-link">
                            <i class="nav-icon fas fa-cube"></i>
                            <p>
                                Data Barang
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="/lelang" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Data Lelang
                        </p>
                    </a>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout-petugas') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Log out</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
