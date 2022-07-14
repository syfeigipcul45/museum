@extends('homepage.layouts.app')

@section('title')
Kontak
@endsection

@section('extra-css')

@endsection

@section('content')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact">
                    <h2 class="heading_1 text-center">Kontak Kami</h2>
                    <form role="form" action="{{ route('homepage.kontak.store') }}" method="post">
                        @csrf
                        <div class="col-sm-6">
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
                            <div class="form-group">
                                <label for="InputName">Masukkan Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Masukkan Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputMessage">Isi Pesan</label>
                                <div class="input-group">
                                    <textarea name="isi_pesan" class="form-control" rows="6" style="overflow:auto;resize:none" required="" placeholder="Isi Pesan"></textarea>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                    </form>

                    <div class="col-sm-6 col-sm-push-1">
                        <address>
                            <!-- <h3 class="heading_2">Lokasi Kami</h3> -->
                            <p class="lead">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.85816859018!2d116.9903629!3d-0.4132521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcba79091a2b622bd!2sMuseum%20Mulawarman!5e0!3m2!1sid!2sid!4v1654693895392!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </p>
                        </address>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection