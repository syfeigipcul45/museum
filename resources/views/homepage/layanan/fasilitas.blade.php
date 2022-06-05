@extends('homepage.layouts.app')

@section('title')
Fasilitas
@endsection

@section('extra-css')
<style>
    .box {
        display: flex;
    }

    
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@endsection

@section('content')
<section id="service_home">
    <div class="container">
        <div class="row">
            <div class="service_home clearfix">
            <h1 class="text-center">Fasilitas</h1>
                <div class="col-sm-3">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-cutlery"></i></h2>
                        <h3>Kuliner</h3>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-gift"></i></h2>
                        <h3>Souvenir</h3>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-building"></i></h2>
                        <h3>Sewa Gedung</h3>
                        <h4>
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-users"></i></h2>
                        <h3>Pemandu</h3>
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