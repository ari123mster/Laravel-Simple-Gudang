@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Stock</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Stock</a></li>

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

                            <div class="card-header">
                                <h3 class="card-title">Data Master Barang</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Stock </th>
                                            <th>Stock Keluar</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            {{-- @foreach ($barang as $index => $barang)
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $barang->nama }}</td>
                                            @endforeach --}}

                                            @foreach ($barang as $index => $barang)
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $barang->nama }}</td>
                                                <td>{{ $barang->total }}</td>
                                                {{-- <td>{{ $barang->total_keluar }}</td> --}}
                                        </tr>
                                        @endforeach
                                        {{-- @endforeach --}}
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
