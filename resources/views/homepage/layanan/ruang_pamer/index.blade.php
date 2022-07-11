@extends('homepage.layouts.app')

@section('title')
Ruang Pamer
@endsection

@section('extra-css')
<style>
    #back-profil {
        padding-top: 120px;
        padding-bottom: 120px;
        background-attachment: fixed;
        background-color: #ffffff;
    }

    h1 {
        padding-top: 80px;
        font-size: 80px;
        letter-spacing: 1px;
    }
</style>
@endsection

@section('content')

<section id="back-profil">
    <div class="container">
        <div class="row">
            <div class="back-profil clearfix">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Ruang Pamer</h1>
                        <br>
                        <p style="margin-top: 20px;">
                            @foreach($jenis_ruangs as $key => $jenis_ruang)
                            <a href="{{ route('homepage.layanan.ruang_pamer', $jenis_ruang->slug_jenis) }}" style="color: black;">
                                <span style="font-size: 12pt; font-weight: bold;">{{ ++$key }}. &emsp;&emsp;{{ $jenis_ruang->nama_jenis }}</span><br>
                            </a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('extra-js')
<script>
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
</script>
@endsection