@extends('homepage.layouts.app')

@section('title')
{{ $agenda->title }}
@endsection

@section('extra-css')
<style>
    .gambar {
        border-radius: 10%;
        align-items: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@endsection

@section('content')
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog_home clearfix">
                    <div class="blog_home_inner_main clearfix">
                        <div class="blog_home_inner clearfix aos-init aos-animate" data-aos="zoom-in-up">
                            <img src="{{ $agenda->link_media }}" class="gambar" width="60%" height="30%">
                        </div>
                        <div class="blog_home_inner_1 clearfix">
                            <h4>
                                Dibuat oleh Admin pada {{ $agenda->created_at }}
                            </h4>
                            <h2>{{ $agenda->title }}</h2>
                            <p>{!! $agenda->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection