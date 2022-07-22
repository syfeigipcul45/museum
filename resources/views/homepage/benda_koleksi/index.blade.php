@extends('homepage.layouts.app')

@section('title')
Benda Koleksi
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
        padding-top: 30px;
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
                        <h1 class="text-center">BENDA KOLEKSI</h1>
                        <br>
                        <p style="margin-top: 20px;">

                            @foreach($kategoris as $kategori)
                        <div class="col-sm-6">
                            <a href="{{ route('homepage.benda_koleksi.koleksi', $kategori->slug ) }}" style="color: black;"><li><span style="font-size: 12pt; font-weight: bold;">{{ $kategori->name }}</span></li></a>
                            &emsp;&emsp;&emsp;<span style="font-size: 12pt;">{{ getCount($kategori->id) }} buah</span>
                        </div>
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