@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang Masuk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Stock Umum</a></li>
                            <li class="breadcrumb-item active">Stock IN</li>
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
                                <a href="{{ route('masuk.create') }}" class="btn btn-primary ">Tambah</a>

                            </div>



                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('searchbrgmsk') }}" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" name="start_date">
                                        <input type="date" class="form-control" name="end_date">
                                        <button class="btn btn-primary" type="submit"> <i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah </th>
                                            <th>Tanggal Masuk</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($masuk as $index => $masuk)
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $masuk->barang->nama }}</td>
                                                <td>{{ $masuk->qty }}</td>
                                                <td>{{ $masuk->tgl_masuk }}</td>
                                                <td>

                                                    <form action="{{ route('masuk.destroy', $masuk->id) }}" method="POST"
                                                        class="d-inline">
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
