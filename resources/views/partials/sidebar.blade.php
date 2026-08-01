<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-secondary">
            <!-- HOME / DASHBOARD -->
            <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <p>Home</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <span class="sub-item">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- SECTION HEADER -->
            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Menu</h4>
            </li>

            {{-- Menu untuk ROLE: USER --}}
            {{-- @if (Auth::user()->role === 'user') --}}
            <li class="nav-item {{ request()->is('reports/create') ? 'active' : '' }}">
                <a href="{{ route('reports.create') }}">
                    <i class="fas fa-edit"></i>
                    <p>Buat Laporan</p>
                </a>
            </li>

            <li class="nav-item {{ request()->is('items*') ? 'active' : '' }}">
                <a href="{{ route('items.index') }}">
                    <i class="fas fa-box"></i>
                    <p>Daftar Barang</p>
                </a>
            </li>

            {{-- <li class="nav-item {{ request()->is('claims*') ? 'active' : '' }}">
                <a href="{{ route('claims.index') }}">
                    <i class="fas fa-hand-holding"></i>
                    <p>Klaim Barang</p>
                </a>
            </li> --}}

            <li class="nav-item {{ request()->is('reports/history') ? 'active' : '' }}">
                <a href="{{ route('reports.history') }}">
                    <i class="fas fa-history"></i>
                    <p>Riwayat Laporan</p>
                </a>
            </li>
            {{-- @endif --}}

            {{-- Menu untuk ROLE: STAFF --}}
            @if (Auth::user()->role === 'staff' || Auth::user()->role === 'admin')
                <li class="nav-item {{ request()->is('reports/verify') ? 'active' : '' }}">
                    <a href="{{ route('reports.verify.index') }}">
                        <i class="fas fa-check-circle"></i>
                        <p>Verifikasi Laporan</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('claims/verify') ? 'active' : '' }}">
                    <a href="{{ route('claims.verify') }}">
                        <i class="fas fa-check-double"></i>
                        <p>Verifikasi Klaim</p>
                    </a>
                </li>
            @endif

            {{-- Menu untuk ROLE: ADMIN --}}
            @if (Auth::user()->role === 'admin')
                <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}">
                        <i class="fas fa-users-cog"></i>
                        <p>Kelola Pengguna</p>
                    </a>
                </li>

                {{-- <li class="nav-item {{ request()->is('items*') ? 'active' : '' }}">
                    <a href="{{ route('items.index') }}">
                        <i class="fas fa-boxes"></i>
                        <p>Kelola Barang</p>
                    </a>
                </li> --}}
            @endif
        </ul>
    </div>
</div>
