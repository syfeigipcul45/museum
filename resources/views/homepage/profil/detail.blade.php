@extends('homepage.layouts.app')

@section('title')
Sekilas
@endsection

@section('extra-css')
<style>
    #back-profil {
        padding-top: 120px;
        padding-bottom: 120px;
        background-attachment: fixed;
        background-color: #ffffff;
    }
</style>
@endsection

@section('content')

<section id="back-profil">
    <div class="container">
        <div class="row">
            <div class="back-profil clearfix text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>{{ strtoupper($profil->submenu) }}</h1><img src="{{ $profil->link_media }}" height="80%" width="80%">
                        <p style="margin-top: 20px">
                        {!! $profil->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection