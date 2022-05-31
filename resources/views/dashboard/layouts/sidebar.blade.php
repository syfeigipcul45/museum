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
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-clipboard"></i>
        <span>Profil</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-posts*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Berita</span>
    </a>
</li>


<li class="nav-item {{ Request::is('management-facility*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-building"></i>
        <span>Layanan</span>
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