@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang Keluar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Stock Umum</a></li>
                            <li class="breadcrumb-item active">Stock Out</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="button">
                                <a href="{{ route('keluar.create') }}" class="btn btn-primary ">Tambah</a>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('searchbarangkeluar') }}" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" name="start_date">
                                        <input type="date" class="form-control" name="end_date">
                                        <button class="btn btn-primary" type="submit"> <i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah </th>
                                                <th>Team</th>
                                                <th>Tanggal keluar</th>
                                                <th>Keterangan</th>
                                                <th colspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($keluar as $index => $keluar)
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $keluar->barang->nama }}</td>
                                                    <td>{{ $keluar->qty }}</td>
                                                    <td>{{ $keluar->team }}</td>
                                                    <td>{{ $keluar->tgl_keluar }}</td>
                                                    <td>{{ $keluar->keterangan }}</td>
                                                    <td>
                                                        <a href="{{ route('keluar.show', $keluar->id) }}"
                                                            class="btn btn-success"><i class="fas fa-print"></i></a>

                                                        <form action="{{ route('keluar.destroy', $keluar->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
