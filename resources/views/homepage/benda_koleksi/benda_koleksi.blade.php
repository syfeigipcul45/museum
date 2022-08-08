@extends('homepage.layouts.app')

@section('title')
{{ $kategori->name }}
@endsection

@section('extra-css')
<style>

    /* figure.effect-koleksi figcaption::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: -webkit-linear-gradient(top, rgba(133, 138, 169, 0) 0%, rgba(109, 113, 135, 0.8) 75%);
        background: linear-gradient(to bottom, rgba(133, 138, 169, 0) 0%, rgba(109, 113, 135, 0.8) 75%);
        content: '';
        opacity: 0;
        -webkit-transform: translate3d(0, 50%, 0);
        transform: translate3d(0, 50%, 0);
    }

    figure.effect-koleksi h2 {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        color: #000000;
        opacity: 70%;
        -webkit-transition: -webkit-transform 0.35s, color 0.35s;
        transition: transform 0.35s, color 0.35s;
        -webkit-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    figure.effect-koleksi figcaption::before,
    figure.effect-koleksi p {
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
    }

    figure.effect-koleksi p {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 2em;
        width: 100%;
        opacity: 0;
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0);
    }

    figure.effect-koleksi:hover h2 {
        color: #ffffff;
        opacity: 100%;
        -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
        transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
    }

    figure.effect-koleksi:hover figcaption::before,
    figure.effect-koleksi:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    } */

    .box {
        display: flex;
    }

    model-viewer {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</style>
@endsection

@section('content')

<!-- <section id="gallery">
    <div class="container">
        <div class="row">
            <div class="gallery clearfix">
                <h1 class="text-center">{{ $kategori->name }}</h1>
                <div class="gallery_inner clearfix">
                    <p>{!! $kategori->deskripsi !!}</p>
                    @foreach($koleksi as $item)
                    <div class="col-sm-4" style="margin-top: 20px;">
                        <div class="gallery_inner_1">
                            <div class="grid clearfix">
                                <figure class="effect-koleksi">
                                    <img src="{{ json_decode($item->link_media)[0]}}">
                                    <figcaption>
                                        <h2>{{ $item->nama_benda }}</h2>
                                        <a href="{{ route('homepage.benda_koleksi.detail', $item->slug_koleksi) }}" target="__blank">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="paginate clearfix text-center">
                    <ul class="pagination">
                        {{ $koleksi->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="gallery clearfix">
                @if(Auth()->user())
                <h1 class="text-center">{{ $kategori->name }}</h1>
                <div class="gallery_inner clearfix">
                    @foreach($koleksi as $item)
                    <div class="col-sm-4">
                        <div class="gallery_inner_1">
                            <div class="grid clearfix">
                                <figure class="effect-sadie">
                                    <model-viewer camera-controls alt="Model" src="{{ $item->link_media3d }}"></model-viewer>
                                    <figcaption>
                                        <h2>{{ $item->nama_benda }}</h2>
                                        <!-- <p>
                                            {!! getDeskripsi($item->deskripsi) !!}
                                        </p> -->
                                        <a href="{{ route('homepage.benda_koleksi.detail', $item->slug_koleksi) }}" target="__blank">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="paginate clearfix text-center">
                    <ul class="pagination">
                        {{ $koleksi->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
                @else
                <span style="font-size: 12pt; font-weight: bold;">Anda harus login</span>
                @endif
            </div>
        </div>
    </div>
</section>


@endsection

@section('extra-js')
<!-- <script>
    let slideIndex = 0;
    showSlides();

    // Next-previous control
    function nextSlide() {
        slideIndex++;
        showSlides();
        timer = _timer; // reset timer
    }

    function prevSlide() {
        slideIndex--;
        showSlides();
        timer = _timer;
    }

    // Thumbnail image controlls
    function currentSlide(n) {
        slideIndex = n - 1;
        showSlides();
        timer = _timer;
    }

    function showSlides() {
        let slides = document.querySelectorAll(".mySlides");
        let dots = document.querySelectorAll(".dots");

        if (slideIndex > slides.length - 1) slideIndex = 0;
        if (slideIndex < 0) slideIndex = slides.length - 1;

        // hide all slides
        slides.forEach((slide) => {
            slide.style.display = "none";
        });

        // show one slide base on index number
        slides[slideIndex].style.display = "block";

        dots.forEach((dot) => {
            dot.classList.remove("active");
        });

        dots[slideIndex].classList.add("active");
    }

    // autoplay slides --------
    let timer = 7; // sec
    const _timer = timer;

    // this function runs every 1 second
    setInterval(() => {
        timer--;

        if (timer < 1) {
            nextSlide();
            timer = _timer; // reset timer
        }
    }, 1000); // 1sec
</script> -->
@endsection