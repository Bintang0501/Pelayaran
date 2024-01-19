@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: rgb(209, 217, 226)">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data Penyijilan Mustering</h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="{{ url('/warga/penyijilan/store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <a href="{{ url('/warga/penyijilan') }}" class="btn btn-warning"
                                        style="margin-bottom: 10px">
                                        <i class="fa fa-reply"></i> KEMBALI
                                    </a><br>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kapal</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="kapal" class="form-control"
                                                placeholder="">
                                        </div>
                                        <label class="col-1 col-form-label">Jabatan</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="jabatan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Daerah Pelayaran</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="daerah_pelayaran" class="form-control">
                                        </div>
                                        <label class="col-1 col-form-label">Bendera</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bendera" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ijazah</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="ijazah" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Naik</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="tempat_naik" class="form-control"
                                                placeholder="">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tanggal Naik</label>
                                        <div class="col-sm-4">
                                            <input type="date" name="tgl_naik" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanda Tangan Pejabat Pendaftaran Sijil</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="ttd_pejabat_naik" class="form-control">
                                        </div>
                                    </div>

                                    <button type="reset" class="btn btn-danger">
                                        <i class="fa fa-times"></i> RESET
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check"></i> SIMPAN
                                    </button>

                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
