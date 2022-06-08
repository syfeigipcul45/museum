@extends('homepage.layouts.app')

@section('title')
Beranda
@endsection

@section('extra-css')
<style>
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