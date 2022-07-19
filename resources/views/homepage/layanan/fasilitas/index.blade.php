@extends('homepage.layouts.app')

@section('title')
Fasilitas
@endsection

@section('extra-css')
<style>
    .box {
        display: flex;
    }

    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        padding-top: 50px;
        background-color: #ccddf6;
    }

    .center {
        justify-content: center;
    }

    h1 {
        font-size: 80px;
        letter-spacing: 1px;
    }
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@endsection

@section('content')
<section id="service_home">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Fasilitas</h1>
            <div class="flex-container center">
                @foreach($fasilitas as $item)
                <div class="col-sm-2">
                    <div class="service_home_1 text-center">
                        <h2>{!! $item->icon !!}</h2>
                        <h4>{{ $item->nama_judul }}</h4>
                        <h4>
                            <a href="{{ route('homepage.fasilitas.detail', $item->slug) }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection