@extends('homepage.layouts.app')

@section('title')
{{ $berita->title }}
@endsection

@section('extra-css')

@endsection

@section('content')
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog_home clearfix">
                    <h1 class="text-center">Detail</h1>

                    <div class="blog_home_inner_main clearfix">
                        <div class="blog_home_inner clearfix aos-init aos-animate" data-aos="zoom-in-up">
                            <img src="{{ $berita->link_media }}">
                        </div>
                        <div class="blog_home_inner_1 clearfix">
                            <h4>
                                Dibuat oleh {{ $berita->usersCreated->name }} pada {{ $berita->created_at }}
                            </h4>
                            <h2>{{ $berita->title }}</h2>
                            <p>{!! $berita->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection