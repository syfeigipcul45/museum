@extends('homepage.layouts.app')

@section('title')
Detail {{ $ruang_pamer->name }}
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
<section id="middle">
    <div class="container">
        <div class="row">
            <div class="middle clearfix text-center">
                <model-viewer camera-controls alt="Model" src="{{ $ruang_pamer->link_media }}"></model-viewer>
                <h1>{{ $ruang_pamer->name }}</h1>
                <p>
                    {!! $ruang_pamer->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection