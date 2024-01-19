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
                                <h3 class="card-title">Detail Data Penyijilan Mustering</h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="{{ url('/petugas/penyijilan/' . $detail['id']) }}" method="POST"
                                class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <a href="{{ url('/petugas/penyijilan') }}" class="btn btn-warning"
                                        style="margin-bottom: 10px">
                                        <i class="fa fa-reply"></i> KEMBALI
                                    </a><br>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kapal</label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly value="{{ $detail['kapal'] }}" name="kapal"
                                                class="form-control" placeholder="">
                                        </div>
                                        <label class="col-1 col-form-label">Jabatan</label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly value="{{ $detail['jabatan'] }}" name="jabatan"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Daerah Pelayaran</label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly value="{{ $detail['daerah_pelayaran'] }}"
                                                name="daerah_pelayaran" class="form-control">
                                        </div>
                                        <label class="col-1 col-form-label">Bendera</label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly value="{{ $detail['bendera'] }}" name="bendera"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ijazah</label>
                                        <div class="col-sm-10">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download"></i> UNDUH FILE
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Naik</label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly value="{{ $detail['tempat_naik'] }}"
                                                name="tempat_naik" class="form-control" placeholder="">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tanggal Naik</label>
                                        <div class="col-sm-4">
                                            <input type="date" readonly value="{{ $detail['tgl_naik'] }}" name="tgl_naik"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanda Tangan Pejabat Pendaftaran
                                            Sijil</label>
                                        <div class="col-sm-10">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download"></i> UNDUH FILE
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status_naik" class="form-control">
                                                <option value="">~~ Silahkan Pilih ~~</option>
                                                <option value="1">Data Valid</option>
                                                <option value="2">Data Tidak Valid</option>
                                            </select>
                                        </div>
                                    </div><hr>

                                    @if ($detail->status_turun == 0 AND $detail->status_naik == 3)
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Turun</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="tempat_turun" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Tanggal turun</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="tgl_turun" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanda Tangan Nahkoda</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="ttd_nahkoda" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanda Tangan Pejabat Pendaftaran
                                                Sijil</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="ttd_pejabat_turun" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                              <select name="status_turun" class="form-control">
                                                <option value="">~~ Silahkan Pilih ~~</option>
                                                <option value="1">Data Valid</option>
                                                <option value="2">Data Tidak Valid</option>
                                            </select>
                                            </div>
                                        </div>
                                    @endif

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
