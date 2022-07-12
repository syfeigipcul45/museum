@extends('homepage.layouts.app')

@section('title')
Beranda
@endsection

@section('extra-css')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
<style>
    p.header {
        padding: 0 20px;
        font-size: 18px;
        font-weight: bold;
        font-style: italic;
    }

    p.content {
        padding: 0 20px;
        font-size: 12px;
        text-align: justify;
    }

    a .readmore {
        height: 40px;
        width: 100px;
        float: right;
        padding-left: 10px;
        line-height: 40px;
        background-color: #8bc34a;
        margin: 20px;
        font-size: 12px;
        border-radius: 5px;
    }

    a .readmore:hover {
        background-color: #9fdf55;
    }

    a .readmore i {
        color: #fff;
        margin-left: 5px;
        transition: cubic-bezier(0.68, -0.55, 0.27, 01.55) 320ms;
    }

    a .readmore:hover i {
        margin: 0 0 0 20px;
    }
</style>
@endsection

@section('content')
<section id="center">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>{{ getPengaturan()->profile_title ?? '' }}</h1>
                            <p style="text-align: justify; font-size: large; margin-top: 20px; line-height: 30px;">
                                {{ getPengaturan()->profile_description ?? ''}}
                            </p>
                        </div>
                        <div class="col-lg-6"><img src="{{ getPengaturan()->profile_url ?? '' }}" height="80%" width="80%"> </div>
                    </div>
                    <button class="btn btn-hero btn-lg" role="button">
                        Read more <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Boost our Art & culture</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer nec odio.Praesent libero. Sed cursus ante dapibus
                            diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                            Duis sagittis ipsum.Praesent mauris. Vestibulum lacinia arcu
                            eget nulla.Class aptent taciti sociosqu ad litora torquent per
                            conubia nostra, per inceptos himenaeos.
                        </p>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">
                        Read more <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="item slides active">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>
                            tell something <br />
                            about us
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer nec odio.Praesent libero. Sed cursus ante dapibus
                            diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                            Duis sagittis ipsum.Praesent mauris. Vestibulum lacinia arcu
                            eget nulla.Class aptent taciti sociosqu ad litora torquent per
                            conubia nostra, per inceptos himenaeos.
                        </p>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">
                        Read more <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Carousel nav -->
        <a class="carousel-control left" href="#bs-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#bs-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="pages clearfix">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">BERITA TERKINI <a href="{{ route('homepage.berita.index') }}" target="_blank"><i class="fa fa-arrow-right"></i></a></h3>
                            </div>
                            <div class="panel-body">
                                @foreach($berita as $item)
                                <div class="row" style="margin-left: 10px; margin-right: 10px;">
                                    <span style="font-weight: bold;">{{ date('d M Y', strtotime($item->created_at)); }}</span><br>
                                    <a href="{{ route('homepage.berita.detail', $item->slug) }}" target="_blank"><i class="fa fa-arrow-right"></i> {{ $item->title }}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">AGENDA TERKINI <a href="{{ route('homepage.agenda.index') }}"><i class="fa fa-arrow-right"></i></a></h3>
                            </div>
                            <div class="panel-body">
                                @foreach($agenda as $item)
                                <div class="row" style="margin-left: 10px; margin-right: 10px;">
                                    <span style="font-weight: bold;">{{ date('d M Y', strtotime($item->tanggal_agenda)); }}</span><br>
                                    <a href="{{ route('homepage.agenda.detail', $item->slug) }}"><i class="fa fa-arrow-right"></i> {{ $item->title }}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- <section id="about_middle">
    <div class="container">
        <div class="row">
            <div class="about_middle clearfix ">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>{{ getPengaturan()->profile_title ?? '' }}</h1>
                        <p style="text-align: justify; font-size: large; margin-top: 20px; line-height: 30px;">
                            {{ getPengaturan()->profile_description ?? ''}}
                        </p>
                    </div>
                    <div class="col-lg-6"><img src="{{ getPengaturan()->profile_url ?? '' }}" height="80%" width="80%"> </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection

@section('extra-js')
<script>
    $('#carouselFade').carousel();
</script>
@endsection