@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ranking Penilaian</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ranking Penilaian</h6>
            </div>
            <div class="card-body">
                <a href="/admin/tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Nilai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($skor as $h)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $h->siswacalon->name }}</td>
                                <td>{{ $h->siswacalon->nisn }}</td>
                                <td>{{ $h->hasil }}</td>
                                <td>
                                    @if ($h->status == 'Diterima')
                                    <span class="btn btn-info btn-sm">{{ $h->status }}</span>
                                    @else
                                    <span class="btn btn-danger btn-sm">{{ $h->status }}</span>
                                    @endif
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
