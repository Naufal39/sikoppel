<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @if (auth()->user()->is_admin == '1')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                        <span data-feather="file-text"></span>
                        Publikasi
                    </a>
                </li>
            @endif

            @if (auth()->user()->is_comp == '1')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/laporan-bulanan*') ? 'active' : '' }}"
                        href="/dashboard/laporan-bulanan">
                        <span data-feather="file-text"></span>
                        Laporan Bulanan
                    </a>
                </li>
            @endif

            @if (auth()->user()->is_superadmin == '1')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                        <span data-feather="file-text"></span>
                        Publikasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/laporan-bulanan') ? 'active' : '' }}"
                        href="/dashboard/laporan-bulanan">
                        <span data-feather="file-text"></span>
                        Laporan Bulanan
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
