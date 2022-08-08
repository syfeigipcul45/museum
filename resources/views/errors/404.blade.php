@extends('homepage.layouts.app')

@section('title')
Page Not Found
@endsection

@section('extra-css')
<style>
    .gambar {
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
                            <img src="{{ asset('_homepage/img/404.jpg')}}" class="gambar" width="60%" height="30%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection