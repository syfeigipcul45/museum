<section id="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home')}}"><img src="{{ getPengaturan()->logo ?? '' }}" width="70px" height="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="tag_menu {{ Request::is('/') ? 'active_tab' : '' }}" href="{{ route('home')}}">Beranda</a>
                    </li>

                    <li class="dropdown">
                        <a class="tag_menu {{ Request::is('profil*') ? 'active_tab' : '' }}" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">                            
                            @foreach(getProfil() as $key => $profil)
                            @if($key == 3)
                            <li><a href="{{ route('homepage.benda_koleksi.index') }}">Benda Koleksi</a></li>
                            <li><a href="{{ route('homepage.profil.detail', $profil->slug)}}">{{ $profil->submenu }}</a></li>
                            @else                            
                            <li><a href="{{ route('homepage.profil.detail', $profil->slug)}}">{{ $profil->submenu }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a class="tag_menu {{ Request::is('berita*') ? 'active_tab' : '' }}" href="{{ route('homepage.berita.index') }}">Berita</a>
                    </li>
                    <li class="dropdown">
                        <a class="tag_menu {{ Request::is('layanan*') ? 'active_tab' : '' }}" href="" data-toggle="dropdown" role="button" aria-expanded="false">Layanan<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="{{ route('homepage.fasilitas.index') }}">Fasilitas</a></li>
                            <li><a href="{{ route('homepage.layanan.index') }}">Ruang Pamer</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="tag_menu {{ Request::is('kontak*') ? 'active_tab' : '' }}" href="{{ route('homepage.kontak.index') }}">Kontak</a>
                    </li>

                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="" class="tag_menu_1" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
                        <ul class="dropdown-menu drop_2" style="min-width: 300px;">
                            <li>
                                <div class="row_1">
                                    <div class="col-sm-12">
                                        <form class="navbar-form navbar-left" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>