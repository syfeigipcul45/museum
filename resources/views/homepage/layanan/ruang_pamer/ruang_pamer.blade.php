@extends('homepage.layouts.app')

@section('title')
{{ $jenis_ruang->nama_jenis }}
@endsection

@section('extra-css')
<style>
    .box {
        display: flex;
    }

    model-viewer {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@endsection

@section('content')
<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="gallery clearfix">
                @if(Auth()->user())
                <h1 class="text-center">{{ $jenis_ruang->nama_jenis }}</h1>
                <div class="gallery_inner clearfix">
                    @foreach($ruang_pamer as $item)
                    <div class="col-sm-4">
                        <div class="gallery_inner_1">
                            <div class="grid clearfix">
                                <figure class="effect-sadie">
                                    <model-viewer camera-controls alt="Model" src="{{ $item->link_media }}"></model-viewer>
                                    <figcaption>
                                        <h2>{{ $item->name }}</h2>
                                        <!-- <p>
                                            {!! getDeskripsi($item->deskripsi) !!}
                                        </p> -->
                                        <a href="{{ route('homepage.layanan.detail_ruang_pamer', $item->slug) }}" target="__blank">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="paginate clearfix text-center">
                    <ul class="pagination">
                        {{ $ruang_pamer->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
                @else
                <span style="font-size: 12pt; font-weight: bold;">Anda harus login</span>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection