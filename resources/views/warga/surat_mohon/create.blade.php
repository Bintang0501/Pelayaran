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
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                                <i class="fa fa-search"> Detail Isi File </i>
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
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Daftar File Persyaratan Surat Permohonan</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <h2>Harap di Perhatikan dengan teliti!!!</h2><br>

                                          <strong>**Harap satukan File di bawah ini menjadi 1 PDF</strong><br><hr>
                                            <p>
                                                1. Buku Pelaut Asli <br>
                                                2. Foto Copy Buku Pelaut <br>
                                                3. Foto Copy BST <br>
                                                4. Foto Copy Sertifikat COC/COP Terakhir <br>
                                                5. Foto Copy Buku Saku untuk Cadet <br>
                                                6. Foto Copy Surat Persetujuan Praktek Berlayar untuk Cadet <br>
                                                7. Foto Copy Condite Report untuk Cadet <br>
                                                8. Foto Copy KTP/Kartu Keluarga <br>
                                                9. Foto Copy bukti pembayaran/kwitansi PNBP <br>
                                            </p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->
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
    <!-- Button trigger modal -->
<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
