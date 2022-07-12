<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Data User
                </p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('barang.index') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Data Master
                </p>
            </a>
        </li> --}}


        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Data Master
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('barang.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Umum</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('modem.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modem</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Stock Umum
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('masuk.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stock IN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('keluar.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stock Out</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Stock Modem
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('ModemMasuk.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stock IN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ModemKeluar.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stock Out</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('laporan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-print"></i>
                <p>
                    Laporan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-trash"></i>

                <span> Logout</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </a>
        </li>

</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
