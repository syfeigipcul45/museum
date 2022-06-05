@extends('homepage.layouts.app')

@section('title')
Beranda
@endsection

@section('content')

<section id="about_middle">
    <div class="container">
        <div class="row">
            <div class="about_middle clearfix ">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>{{ getPengaturan()->profile_title ?? '' }}</h1>
                        <p style="text-align: justify; font-size: large; margin-top: 20px">
                        {{ getPengaturan()->profile_description ?? ''}}
                        </p>
                        <p style="font-size: 24pt; "><a href="" style="color: black;">> Informasi Kunjungan</a></p>
                    </div>
                    <div class="col-lg-6"><img src="{{ getPengaturan()->profile_url ?? '' }}" height="80%" width="80%"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection