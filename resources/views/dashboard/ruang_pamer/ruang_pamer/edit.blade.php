@extends('dashboard.layouts.app')

@section('title')
Edit Gambar 3D
@endsection

@section('extra-css')
<script src="https://cdn.tiny.cloud/1/mgnx3lcm1bg1v85bmqfw3ogmz9vjtdxolbcs3pmx800uia9e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
    .error-input {
        color: #d44950;
    }

    model-viewer {
        width: 100%;
        height: 400px;
        margin-left: auto;
        margin-right: auto;
    }

    .imagePreview {
        width: 100%;
        height: 170px;
        background-position: center center;
        background: url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
        background-color: #fff;
        background-size: cover;
        background-repeat: no-repeat;
        display: inline-block;
        box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        display: block;
        border-radius: 0px;
        box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
        margin-top: -5px;
    }

    .imgUp {
        margin-bottom: 15px;
    }

    .del {
        position: absolute;
        top: 0px;
        right: 15px;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        background-color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
    }

    .imgAdd {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #4bd7ef;
        color: #fff;
        box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
        text-align: center;
        line-height: 30px;
        margin-top: 0px;
        cursor: pointer;
        font-size: 15px;
    }
</style>
@endsection

@section('content')

<form action="{{ route('dashboard.ruang_pamer.update', $ruang_pamer->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nama Model 3D</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ old('name', $ruang_pamer->name) }}" />
                        @error('name')
                        <small class="form-text error-input">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Upload Foto</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- <span style="color: red; font-size: smaller;">*Gambar lebih baik berukuran 2400x1200, 1600x800, 800x400 pixels</span> -->
                    </div>
                    <div id="imageWrapper" class="row">
                        @foreach(json_decode($ruang_pamer->link_gambar) as $key => $item)
                        <div class="col-sm-3">
                            <img src="{{ $item }}" alt="" class="img-fluid" />
                            <input type="hidden" class="uploadFile img" name="old_link_gambar[]" value="{{ $item }}" />
                            <i class="fa fa-times del"></i>
                        </div>
                        @endforeach
                        <i class="fa fa-plus imgAdd"></i>
                        <!-- <button id="changeImage" class="btn btn-primary mt-3 h-25" type="button">
                            <span class="text">Ubah Gambar</span>
                        </button> -->
                    </div>
                    <div id="changeImageWrapper" class="row" hidden disabled>
                        <div class="col-sm-3 imgUp">
                            <div class="imagePreview"></div>
                            <label class="btn btn-primary">
                                Pilih<input type="file" class="uploadFile img" name="link_gambar[]" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" />
                            </label>
                        </div>
                        <i class="fa fa-plus imgAdd"></i>
                    </div>
                    @error('link_media')
                    <small class="form-text error-input">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Deskripsi Model 3D</h6>
                </div>
                <div class="card-body">
                    <textarea id="content-news" name="deskripsi">{{ old('deskripsi', $ruang_pamer->deskripsi) }}</textarea>
                    @error('deskripsi')
                    <small class="form-text error-input">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span>{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</span>
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="text">Update</span>
                        </button>
                        <a href="" class="btn btn-warning" onclick="location.href = document.referrer; return false;">
                            Kembali
                        </a>
                    </div>
                    <hr>
                    <div>
                        <strong>Jenis Ruang</strong>
                        <div class="card my-2">
                            <select class="form-control js-example-basic-single" name="jenis_ruang">
                                @foreach($jenis_ruangs as $jenis_ruang)
                                <option value="{{ $jenis_ruang->id }}" @if($ruang_pamer->jenis_id == $jenis_ruang->id) selected @endif>{{ $jenis_ruang->nama_jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('kategori_id')
                        <small class="form-text error-input">{{ $message }}</small>
                        @enderror
                    </div>
                    <hr>
                    <div>
                        <strong>Upload File 3D</strong>
                        <model-viewer camera-controls alt="Model" src="{{ $ruang_pamer->link_media }}"></model-viewer>
                        <div class="card my-2">
                            <label for="imageUpload" class="mb-0 cursor-pointer">
                                <input type="hidden" name="old_link_media" value="{{ $ruang_pamer->link_media }}" />
                            </label>
                        </div>
                        <input type='file' name="link_media" accept=".glb" />
                        @error('link_media')
                        <small class="form-text error-input">{{ $message }}</small>
                        @enderror
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('extra-js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    tinymce.init({
        selector: 'textarea#content-news',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [{
                title: 'My page 1',
                value: 'https://www.tiny.cloud'
            },
            {
                title: 'My page 2',
                value: 'http://www.moxiecode.com'
            }
        ],
        image_list: [{
                title: 'My page 1',
                value: 'https://www.tiny.cloud'
            },
            {
                title: 'My page 2',
                value: 'http://www.moxiecode.com'
            }
        ],
        image_class_list: [{
                title: 'None',
                value: ''
            },
            {
                title: 'Some class',
                value: 'class-name'
            }
        ],
        importcss_append: true,
        file_picker_callback: function(callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', {
                    text: 'My text'
                });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', {
                    alt: 'My alt text'
                });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', {
                    source2: 'alt.ogg',
                    poster: 'https://www.google.com/logos/google.jpg'
                });
            }
        },
        templates: [{
                title: 'New Table',
                description: 'creates a new table',
                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
            },
            {
                title: 'Starting my story',
                description: 'A cure for writers block',
                content: 'Once upon a time...'
            },
            {
                title: 'New list with dates',
                description: 'New List with dates',
                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
            }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 300,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });

    $('#changeImage').click(function() {
        $('#changeImageWrapper').removeAttr('hidden');
        $('#changeImageWrapper').prop('disabled', true);
        $('#imageWrapper').hide();
    });

    $(".imgAdd").click(function() {
        $(this).closest(".row").find('.imgAdd').before(`
            <div class="col-sm-3 imgUp">
                <div class="imagePreview"></div>
                <label class="btn btn-primary">Pilih
                    <input type="file" class="uploadFile img" name="link_gambar[]" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;" />
                </label>
                <i class="fa fa-times del"></i>
            </div>
        `);
    });

    $(document).on("click", "i.del", function() {
        $(this).parent().remove();
    });

    $(function() {
        $(document).on("change", ".uploadFile", function() {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                }
            }
        });
    });
</script>
@endsection