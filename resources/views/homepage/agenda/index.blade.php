@extends('homepage.layouts.app')

@section('title')
Agenda
@endsection

@section('extra-css')

@endsection

@section('content')
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog_home clearfix">
                    <h1 class="text-center">Agenda</h1>
                    @forelse($agenda as $item)
                    <div class="blog_home_inner_main clearfix">
                        <div class="blog_home_inner clearfix aos-init aos-animate" data-aos="zoom-in-up">
                            <img src="{{ $item->link_media }}" width="50%" height="25%" />
                        </div>
                        <div class="blog_home_inner_1 clearfix">
                            <h4>
                                Dibuat oleh Admin pada {{ $item->created_at }}
                            </h4>
                            <h2>
                                <a href="{{ route('homepage.agenda.detail', $item->slug) }}" target="_blank">{{ $item->title }}</a>
                            </h2>
                            <p>
                                {!! shrinkText($item->content) !!}
                            </p>
                            <h4 class="heading_1">
                                <a href="{{ route('homepage.agenda.detail', $item->slug) }}" target="_blank">Read More <i class="fa fa-arrow-right"></i></a>
                            </h4>
                        </div>
                    </div>
                    @empty
                    <div class="blog_home_inner_main clearfix text-center">
                        <div class="blog_home_inner_1 clearfix">
                            <p>Data tidak ditemukan</p>
                        </div>
                    </div>
                    @endforelse

                    <div class="paginate clearfix text-center">
                        <ul class="pagination">
                            {{ $agenda->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection