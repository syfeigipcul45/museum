@extends('dashboard.layouts.app')

@section('title')
Management Benda Koleksi
@endsection

@section('extra-css')
<link href="{{ asset('_dashboard/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Benda Koleksi</h6>
        <a href="{{ route('dashboard.koleksi.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>Nama Gambar 3D</th>
                        <th>Jenis Koleksi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>Nama Gambar 3D</th>
                        <th>Jenis Koleksi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($koleksi as $key => $item)
                    <tr>
                        <td>{{ ++$key }}.</td>
                        <td>
                            <img src="{{ json_decode($item->link_media)[0] }} "/ width="120px" alt="" class="img-fluid h-40" />
                        </td>
                        <td>{{ $item->nama_benda }}</td>
                        <td>{{ $item->kategoriId->name}}</td>
                        <td>{!! Str::limit($item->deskripsi, 100, '...') !!}</td>
                        <td class="text-center">
                            <a href="{{ route('dashboard.koleksi.show', $item->id) }}" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.koleksi.edit', $item->id) }}" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm remove-koleksi" data-toggle="modal" data-target="#deleteModal" data-href="{{ route('dashboard.koleksi.destroy', $item->id) }}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

<!-- Delete Modal-->
@include('dashboard.benda_koleksi.koleksi.includes.modal-delete')

@section('extra-js')
<!-- Page level plugins -->
<script src="{{ asset('_dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('_dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('_dashboard/js/demo/datatables-demo.js') }}"></script>

<!-- Custom scripts -->
<script>
    $('.remove-koleksi').click(function() {
        const hrefRemove = $(this).data('href');
        $('#remove-koleksi').attr('action', hrefRemove);
    });
</script>
@endsection