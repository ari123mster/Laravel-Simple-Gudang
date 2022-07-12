@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Modem Keluar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Stock</a></li>
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
                                <a href="{{ route('ModemKeluar.create') }}" class="btn btn-primary ">Tambah</a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('searchmodemkeluar') }}" method="GET">
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
                                                <th>SN Modem</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Keterangan</th>
                                                <th colspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($modemkeluar as $index => $modemkeluar)
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $modemkeluar->modem->nama }}</td>
                                                    <td>{{ $modemkeluar->qty }}</td>
                                                    <td>{{ $modemkeluar->team }}</td>
                                                    <td>{{ $modemkeluar->sn }}</td>
                                                    <td>{{ $modemkeluar->tgl_keluar }}</td>
                                                    <td>{{ $modemkeluar->keterangan }}</td>
                                                    <td>
                                                        <a href="{{ route('ModemKeluar.show', $modemkeluar->id) }}"
                                                            class="btn btn-success"><i class="fas fa-print"></i></a>

                                                        <form
                                                            action="{{ route('ModemKeluar.destroy', $modemkeluar->id) }}"
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
@push('script')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endpush
