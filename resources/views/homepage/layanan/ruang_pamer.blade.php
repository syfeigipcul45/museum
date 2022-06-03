@extends('homepage.layouts.app')

@section('title')
Ruang Pamer
@endsection

@section('extra-css')
<style>
    .box {
        display: flex;
    }

    model-viewer {
        width: 800px;
        height: 500px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@endsection

@section('content')
<section id="about_middle">
    <div class="container">
        <div class="row">
            <div class="about_middle clearfix text-center">
                <div class="box">
                    <!-- <iframe width="1024" height="640" allowfullscreen src="https://v3d.net/7ue"></iframe> -->
                    <model-viewer camera-controls alt="Model" src="{{ asset('_homepage/model/cloth_internal_air_pressure.glb')}}"></model-viewer>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection