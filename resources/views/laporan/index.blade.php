@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Laporan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>

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


                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Laporan</th>
                                        <th>Cetak</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>1</td>
                                        <td>Barang Masuk</td>
                                        <td>
                                            <form action="{{ route('cetakbrgmsk') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" name="start_date">
                                                    <input type="date" class="form-control" name="end_date">
                                                    <button class="btn btn-primary" type="submit"> <i
                                                            class="fas fa-print"></i></button>
                                                </div>
                                            </form>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Barang keluar</td>
                                        <td>
                                            <form action="{{ route('cetakbrgklr') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" name="start_date">
                                                    <input type="date" class="form-control" name="end_date">
                                                    <button class="btn btn-primary" type="submit"> <i
                                                            class="fas fa-print"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Modem Masuk</td>
                                        <td>
                                            <form action="{{ route('cetakmdmmsk') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" name="start_date">
                                                    <input type="date" class="form-control" name="end_date">
                                                    <button class="btn btn-primary" type="submit"> <i
                                                            class="fas fa-print"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Modem Keluar</td>
                                        <td>
                                            <form action="{{ route('cetakmdmklr') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" name="start_date">
                                                    <input type="date" class="form-control" name="end_date">
                                                    <button class="btn btn-primary" type="submit"> <i
                                                            class="fas fa-print"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>

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
