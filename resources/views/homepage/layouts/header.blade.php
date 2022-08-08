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
                <ul class="nav navbar-nav navbar-right">
                    @if(auth()->user())
                    @hasanyrole('superadmin|admin')
                    <a href="{{ route('beranda') }}"><span class="tag_menu_1">{{ auth()->user()->name }}</span></a>
                    @else
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="tag_menu_1">{{ auth()->user()->name }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endhasanyrole
                    @else
                    <li class="dropdown"><a href="" class="tag_menu_1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <ul class="dropdown-menu drop_box" style="padding: 15px; min-width: 250px">
                            <li>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form class="form" role="form" method="post" action="{{ route('login.submit') }}" accept-charset="UTF-8" id="login-nav">
                                            @csrf
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="exampleInputEmail" aria-describedby="emailHelp" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address..." required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">
                                                    Log In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <form method="get" action="">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>