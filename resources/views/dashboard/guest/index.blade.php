@extends('dashboard.layouts.app')

@section('title')
Management Guest
@endsection

@section('extra-css')
<link href="{{ asset('_dashboard/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Users</h6>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-error" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($guests as $key => $guest)
                    <tr>
                        <td>{{ ++$key }}.</td>
                        <td>{{ $guest->name }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>
                            @if($guest->is_active == '1')
                            <form method="post" action="{{ route('dashboard.guests.update', $guest->id) }}">
                                @csrf
                                <input type="text" name="is_active" value="0" hidden>
                                <button type="submit" class="btn btn-success btn-sm">Aktif</button>
                            </form>
                            @else
                            <form method="post" action="{{ route('dashboard.guests.update', $guest->id) }}">
                                @csrf
                                <input type="text" name="is_active" value="1" hidden>
                                <button class="btn btn-danger btn-sm">Tidak Aktif</button>
                            </form>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger btn-circle btn-sm remove-guest" data-toggle="modal" data-target="#deleteModal" data-href="{{ route('dashboard.guests.destroy', $guest->id) }}">
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
@include('dashboard.guest.includes.modal-delete')

@section('extra-js')
<!-- Page level plugins -->
<script src="{{ asset('_dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('_dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('_dashboard/js/demo/datatables-demo.js') }}"></script>

<!-- Custom scripts -->
<script>
    $('.remove-guest').click(function() {
        const hrefRemove = $(this).data('href');
        $('#remove-guest').attr('action', hrefRemove);
    });
</script>
@endsection