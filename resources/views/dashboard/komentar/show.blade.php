@extends('dashboard.layouts.app')

@section('title')
Lihat Komentar
@endsection

@section('extra-css')
<script src="https://cdn.tiny.cloud/1/mgnx3lcm1bg1v85bmqfw3ogmz9vjtdxolbcs3pmx800uia9e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<style>
    .error-input {
        color: #d44950;
    }
</style>
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">
    
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Komentar</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="m-0 font-weight-bold text-primary">Nama Lengkap :</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span>{{ $comment->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="m-0 font-weight-bold text-primary">Email :</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span>{{ $comment->email }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="m-0 font-weight-bold text-primary">Tanggal :</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span>{{ $comment->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="m-0 font-weight-bold text-primary">Isi Pesan :</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span>{{ $comment->isi_pesan }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="" class="btn btn-warning" onclick="location.href = document.referrer; return false;">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')

@endsection