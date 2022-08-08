<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('')}}">
    <div class="sidebar-brand-text mx-3">Museum Mulawarman</div>
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

<li class="nav-item {{ Request::is('management-events*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.event.index') }}">
        <i class="fas fa-calendar-alt"></i>
        <span>Agenda</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-koleksi*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKoleksi" aria-expanded="true" aria-controls="collapseMedia">
        <i class="fas fa-fw fa-box"></i>
        <span>Benda Koleksi</span>
    </a>
    <div id="collapseKoleksi" class="collapse {{ Request::is('management-koleksi*') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('dashboard.kategori_koleksi.index') }}">Kategori</a>
            <a class="collapse-item" href="{{ route('dashboard.koleksi.index') }}">Koleksi</a>
        </div>
    </div>
</li>

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

<li class="nav-item {{ Request::is('management-fasilitas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.fasilitas.index') }}">
        <i class="fas fa-fw fa-landmark"></i>
        <span>Fasilitas</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-ruang*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePamer" aria-expanded="true" aria-controls="collapseMedia">
        <i class="fas fa-fw fa-globe"></i>
        <span>Ruang Pamer</span>
    </a>
    <div id="collapsePamer" class="collapse {{ Request::is('management-ruang*') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('dashboard.jenis_ruang.index') }}">Jenis Ruang</a>
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

@hasrole('superadmin')
<li class="nav-item {{ Request::is('management-users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.users.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Users</span>
    </a>
</li>
@endhasrole

@hasrole('superadmin|admin')
<li class="nav-item {{ Request::is('management-guests*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.guests.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Guests</span>
    </a>
</li>
@endhasrole


<li class="nav-item {{ Request::is('management-pengaturan*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.pengaturan.index') }}">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengaturan</span>
    </a>
</li>

<li class="nav-item {{ Request::is('management-images*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.hero_images.index') }}">
        <i class="fas fa-fw fa-images"></i>
        <span>Gambar Utama</span>
    </a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>