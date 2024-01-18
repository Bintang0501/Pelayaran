@extends('layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Surat Permohonan Masa Berlayar</h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="{{ url('/warga/surat_mohon/store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <a href="{{ url('/warga/surat_mohon') }}" class="btn btn-warning btn-sm"
                                        style="margin-bottom: 10px">
                                        <i class="fa fa-reply"></i> KEMBALI
                                    </a><br>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $buku_pelaut['users']['nama'] }}" name="nama"
                                                class="form-control" placeholder="masukkan kode pelaut" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No. Bukti PNBP</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="no_bukti_pnbp" class="form-control"
                                                placeholder="Masukkan Nomor Bukti PNBP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat</label>
                                        <div class="col-sm-3">
                                            <input type="text" value="{{ $buku_pelaut['tempat'] }}" name="tempat"
                                                class="form-control" readonly>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="date" value="{{ $buku_pelaut['tgl_lahir'] }}" name="tgl_lahir"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..." readonly>{{ $buku_pelaut['alamat'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No Buku Pelaut</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $buku_pelaut['no_buku_pelaut'] }}"
                                                name="no_buku_pelaut" class="form-control"
                                                placeholder="masukkan kode pelaut" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $buku_pelaut['nama'] }}" name="nama"
                                                class="form-control" placeholder="masukkan kode pelaut" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kode Laut</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $buku_pelaut['kd_pelaut'] }}" name="kd_pelaut"
                                                class="form-control" placeholder="masukkan kode pelaut" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File Persyaratan</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file_persyaratan" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" data-toogle="modal" data-target="#modal-primary">
                                                <i class="fa fa-search"></i> Detail isi File
                                            </button>
                                        </div>
                                    </div>

                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-times"></i> RESET
                                    </button>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-save"></i> SIMPAN
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
