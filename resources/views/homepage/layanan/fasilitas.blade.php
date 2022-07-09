@extends('homepage.layouts.app')

@section('title')
Fasilitas
@endsection

@section('extra-css')
<style>
    .box {
        display: flex;
    }
    .tengah {
        margin: 0 -15px;
        justify-content: center;
    }

    
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@endsection

@section('content')
<section id="service_home">
    <div class="container">
        <div class="row">
            <div class="service_home">
            <h1 class="text-center">Fasilitas</h1>
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa-solid fa-cutlery"></i></h2>
                        <h4>Kuliner</h4>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa-solid fa-gift"></i></h2>
                        <h4>Souvenir</h4>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa-solid fa-building"></i></h2>
                        <h4>Sewa Gedung</h4>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa-solid fa-users"></i></h2>
                        <h4>Pemandu</h4>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa-solid fa-mosque"></i></h2>
                        <h4>Musholla</h4>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection