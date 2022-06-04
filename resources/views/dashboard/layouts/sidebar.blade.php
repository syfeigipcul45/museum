<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('')}}">
    <div class="sidebar-brand-text mx-3">KPHP Kendilo</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('beranda') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Main Menu
</div>

<li class="nav-item {{ Request::is('management-profil*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.profil.index') }}">
        <i class="fas fa-fw fa-clipboard"></i>
        <span>Profil</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-berita*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.berita.index') }}">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Berita</span>
    </a>
</li>


<li class="nav-item {{ Request::is('management-layanan*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayanan" aria-expanded="true" aria-controls="collapseMedia">
        <i class="fas fa-fw fa-landmark"></i>
        <span>Layanan</span>
    </a>
    <div id="collapseLayanan" class="collapse {{ Request::is('management-layanan*') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Publikasi</a>
            <a class="collapse-item" href="">Fasilitas</a>
            <a class="collapse-item" href="{{ route('dashboard.ruang_pamer.index') }}">Ruang Pamer</a>
        </div>
    </div>
</li>

<li class="nav-item {{ Request::is('management-hubungi*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Hubungi</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Heading -->
<div class="sidebar-heading">
    Pengaturan
</div>

<li class="nav-item {{ Request::is('management-users*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-users"></i>
        <span>Users</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-setting*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengaturan</span>
    </a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>