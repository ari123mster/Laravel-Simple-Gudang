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
                            <li class="breadcrumb-item"><a href="#">Stock IN</a></li>
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('ModemKeluar.store') }}" method="POST">
                                @csrf

                                <div class="col-md-4">
                                    <label>Nama Modem</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control select2" name="modem_id">
                                        <option>..Pilih..</option>
                                        @foreach ($modem as $modem)
                                            <option value="{{ $modem->id }}">{{ $modem->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Jumlah</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="qty" class="form-control" name="qty">
                                </div>
                                <div class="col-md-4">
                                    <label>Team</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control select2" id="team" name="team">
                                        <option>Ikr</option>
                                        <option>Maintenance</option>
                                        <option>Noc Support</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>SN Modem</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="sn" class="form-control" name="sn">
                                </div>

                                <div class="col-md-4">
                                    <label>Tanggal Keluar</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="date" id="tgl_keluar" class="form-control" name="tgl_keluar">
                                </div>
                                <div class="col-md-4">
                                    <label>Keterangan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="keterangan" class="form-control" name="keterangan">
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
