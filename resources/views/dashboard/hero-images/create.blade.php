@extends('dashboard.layouts.app')

@section('title')
Tambah Hero Images
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
<form action="{{ route('dashboard.hero_images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Gambar</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Gambar Utama</strong>
                            <br><span style="font-size: small; color: red;">*maksimal gambar berukuran 5mb, tipe gambar .png, .jpg, .jpeg. Ukuran gambar 1400x900</span>
                            <div class="card my-2">
                                <label for="imageHero" class="mb-0 cursor-pointer">
                                    <img id="image-hero" class="card-img-top" src="https://www.pngkey.com/png/detail/233-2332677_image-500580-placeholder-transparent.png" alt="Card image cap">
                                </label>
                                <input type='file' id="imageHero" name="link_hero" accept=".png, .jpg, .jpeg" hidden />
                            </div>
                            @error('link_hero')
                            <small class="form-text error-input">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ old('judul') }}" />
                                @error('judul')
                                <small class="form-text error-input">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <br><span style="font-size: small; color:red">*direkomendasikan gambar dengan ratio 1:1. contoh: 400x400, 800x800, 1200x1200</span>
                                <br><span style="font-size: small; color:red">*tidak wajib diisi</span>
                                <div class="card my-2">
                                <label for="imageUpload" class="mb-0 cursor-pointer">
                                    <img id="image-preview" class="card-img-top" src="https://www.pngkey.com/png/detail/233-2332677_image-500580-placeholder-transparent.png" alt="Card image cap">
                                </label>
                                <input type='file' id="imageUpload" name="link_image" accept=".png, .jpg, .jpeg" hidden />
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" onkeyup="countChars(this);">{{ old('deskripsi') }}</textarea>
                                <p id="charNum">0 dari 500 karakter</p>
                                @error('deskripsi')
                                <small class="form-text error-input">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>URL</label>
                                <br><span style="font-size: small; color:red">*tidak wajib diisi</span>
                                <input type="text" class="form-control" name="url" value="{{ old('url') }}" />
                                @error('url')
                                <small class="form-text error-input">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-icon-split float-right">
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection

@section('extra-js')
<script>
    tinymce.init({
        selector: 'textarea#content-news',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        height: "480"
    });

    $('#status').change(function() {
        if ($('#status').is(':checked')) {
            $('#status-value').val(1);
        } else {
            $('#status-value').val(0);
        }
    });

    $("#imageUpload").change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
                $('#image-preview').hide();
                $('#image-preview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageHero").change(function() {
        readURLHero(this);
    });

    function readURLHero(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image-hero').attr('src', e.target.result);
                $('#image-hero').hide();
                $('#image-hero').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function countChars(obj) {
        var maxLength = 500;
        var strLength = obj.value.length;

        if (strLength > maxLength) {
            document.getElementById("charNum").innerHTML = '<span style="color: red;">' + strLength + ' dari ' + maxLength + ' karakter</span>';
        } else {
            document.getElementById("charNum").innerHTML = strLength + ' dari ' + maxLength + ' karakter';
        }
    }
</script>
@endsection