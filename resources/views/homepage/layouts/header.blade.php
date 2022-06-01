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
                <a class="navbar-brand" href="index.html">MUSEUM <span> MULAWARMAN</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="tag_menu active_tab" href="index.html">Beranda</a>
                    </li>

                    <li class="dropdown">
                        <a class="tag_menu" href="blog.html" data-toggle="dropdown" role="button" aria-expanded="false">Profil<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="blog.html">Sekilas</a></li>
                            <li><a href="blog.html">Sejarah</a></li>
                            <li><a href="blog.html">Visi Misi</a></li>
                            <li><a href="blog.html">Benda Koleksi</a></li>
                            <li><a href="blog.html">Sumber Daya Manusia</a></li>
                            <li><a href="blog.html">Struktur Pegawai</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="tag_menu" href="detail.html">Berita</a>
                    </li>
                    <li class="dropdown">
                        <a class="tag_menu" href="blog.html" data-toggle="dropdown" role="button" aria-expanded="false">Layanan<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="blog.html">Publikasi</a></li>
                            <li class="dropdown">
                                <a class="tag_menu" href="blog.html" data-toggle="dropdown" role="button" aria-expanded="false">Fasilitas<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog.html">Souvenir</a></li>
                                    <li><a href="blog.html">Kuliner</a></li>
                                    <li><a href="blog.html">Sewa Tempat</a></li>
                                    <li><a href="blog.html">Pemandu</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('homepage.layanan.ruang_pamer') }}">Ruang Pamer</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="tag_menu" href="contact.html">Kontak</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="blog.html" class="tag_menu_1" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>