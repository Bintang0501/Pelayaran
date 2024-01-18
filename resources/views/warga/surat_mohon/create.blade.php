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
                  <form action="{{ url('/warga/buku_pelaut/store') }}" method="POST" class="form-horizontal"
                  enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">
                        <a href="{{ url('/warga/buku_pelaut') }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px">
                            <i class="fa fa-reply"></i> KEMBALI
                        </a><br>\
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Pelaut</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $buku_pelaut['kd_pelaut'] }}" name="kd_pelaut" class="form-control" placeholder="masukkan kode pelaut">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_pendaftaran" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-3">
                            <input type="text" name="tempat" class="form-control">
                        </div>
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Rambut</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_rambut" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Mata</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_mata" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Kulit</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_kulit" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                            <input type="number" name="tinggi_badan" min="0" max="250" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                            <select name="gol_darah" class="form-control">
                              <option value="">~~ Silahkan Pilih ~~</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O">O</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" name="foto" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sertifikat Keahlian</label>
                        <div class="col-sm-10">
                            <input type="file" name="sertif_keahlian" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sertifikat Keterampilan</label>
                        <div class="col-sm-10">
                            <input type="file" name="sertif_keterampilan" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">KTP</label>
                        <div class="col-sm-10">
                            <input type="file" name="ktp" class="form-control">
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
