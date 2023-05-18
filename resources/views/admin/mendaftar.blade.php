@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Siswa Yang Mendaftar</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Yang Mendaftar</h6>
            </div>
            <div class="card-body">
                <a href="/admin/tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Asal Sekolah</th>
                                <th>Nilai IPA</th>
                                <th>Nilai MTK</th>
                                <th>Nilai B.Ind</th>
                                <th>Nilai B.Ing</th>
                                <th>Jarak (km)</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswacalons as $siswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswa->name }}</td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->no_telp }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>{{ $siswa->id_jurusan }}</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                                <td>{{ $siswa->nilai_ipa }}</td>
                                <td>{{ $siswa->nilai_mtk }}</td>
                                <td>{{ $siswa->nilai_indo }}</td>
                                <td>{{ $siswa->nilai_ing }}</td>
                                <td>{{ $siswa->jarak }}</td>
                                <td>Lulus</td>
                                <td>
                                    <a href="#" class="btn btn-info">
                                        Detail
                                    </a>
                                    <a href="#" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        Hapus
                                    </a>
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
