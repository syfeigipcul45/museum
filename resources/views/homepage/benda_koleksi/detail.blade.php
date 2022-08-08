@extends('homepage.layouts.app')

@section('title')
Detail {{ $koleksi->nama_benda }}
@endsection

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('_homepage/css/swiper.min.css') }}" />
<link rel="stylesheet" href="{{ asset('_homepage/css/easyzoom.css') }}" />
<link rel="stylesheet" href="{{ asset('_homepage/css/main.css') }}" /> -->

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css">
<style>
    .box {
        display: flex;
    }

    model-viewer {
        width: 100%;
        height: 500px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@endsection

@section('content')
<section id="middle">
    <div class="container">
        <div class="row">
            @if(Auth()->user())
            <div class="middle clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" width="400" src="{{ json_decode($koleksi->link_media)[0] }}" xoriginal="{{ json_decode($koleksi->link_media)[0] }}" />
                            <div class="xzoom-thumbs" style="margin-top: 10px;">
                                @foreach(json_decode($koleksi->link_media) as $key => $item)
                                <a href="{{ $item }}">
                                    <img class="xzoom-gallery" width="80" src="{{ $item }}" xpreview="{{ $item }}">
                                </a>
                                @endforeach
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <model-viewer camera-controls alt="Model" src="{{ $koleksi->link_media3d }}"></model-viewer>
                    </div>
                </div>
                <h1 class="text-center">{{ $koleksi->nama_benda }}</h1>
                <p>
                    {!! $koleksi->deskripsi !!}
                </p>
            </div>
            @else
            <span style="font-size: 12pt; font-weight: bold;">Anda harus login</span>
            @endif
        </div>
    </div>
</section>
@endsection

@section('extra-js')
<script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
<script>
    (function($) {
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 400,
                title: true,
                tint: '#333',
                Xoffset: 15
            });
            $('.xzoom2, .xzoom-gallery2').xzoom({
                position: '#xzoom2-id',
                tint: '#ffa200'
            });
            $('.xzoom3, .xzoom-gallery3').xzoom({
                position: 'lens',
                lensShape: 'circle',
                sourceClass: 'xzoom-hidden'
            });
            $('.xzoom4, .xzoom-gallery4').xzoom({
                tint: '#006699',
                Xoffset: 15
            });
            $('.xzoom5, .xzoom-gallery5').xzoom({
                tint: '#006699',
                Xoffset: 15
            });

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom, .xzoom2, .xzoom3').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        xzoom.eventleave = function(element) {
                            element.hammer().on('tap', function(event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom4').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openfancy, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = {
                                        src: gallery[i]
                                    };
                                }
                                $.magnificPopup.open({
                                    items: images,
                                    type: 'image',
                                    gallery: {
                                        enabled: true
                                    }
                                });
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

            } else {
                //If not touch device

                //Integration with fancybox plugin
                $('#xzoom-fancy').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    $.fancybox.open(xzoom.gallery().cgallery, {
                        padding: 0,
                        helpers: {
                            overlay: {
                                locked: false
                            }
                        }
                    });
                    event.preventDefault();
                });

                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = {
                            src: gallery[i]
                        };
                    }
                    $.magnificPopup.open({
                        items: images,
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                    event.preventDefault();
                });
            }
        });
    })(jQuery);
</script>
@endsection