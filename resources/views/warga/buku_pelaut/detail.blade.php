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
					<h3 class="card-title">Detail Buku Pelaut</h3>
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
                            <input type="text" value="{{ $detail['kd_pelaut'] }}" readonly name="kd_pelaut" class="form-control" placeholder="masukkan kode pelaut">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['no_pendaftaran'] }}" readonly name="no_pendaftaran" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['nama'] }}" readonly name="nama" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-3">
                            <input type="text" value="{{ $detail['tempat'] }}" readonly name="tempat" class="form-control">
                        </div>
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" value="{{ $detail['tgl_lahir'] }}" readonly name="tgl_lahir" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..." readonly>{{ $detail['kd_pelaut'] }}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Rambut</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['warna_rambut'] }}" readonly name="warna_rambut" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Mata</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['warna_mata'] }}" readonly name="warna_mata" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Kulit</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['warna_kulit'] }}" readonly name="warna_kulit" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{ $detail['tinggi_badan'] }}" readonly name="tinggi_badan" min="0" max="250" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                            <select name="gol_darah" class="form-control" disabled>
                              <option value="">~~ Silahkan Pilih ~~</option>
                              <option value="A" {{ $detail['gol_darah'] == 'A' ? 'selected' : '' }}>A</option>
                              <option value="B" {{ $detail['gol_darah'] == 'B' ? 'selected' : '' }}>B</option>
                              <option value="AB" {{ $detail['gol_darah'] == 'AB' ? 'selected' : '' }}>AB</option>
                              <option value="O" {{ $detail['gol_darah'] == 'O' ? 'selected' : '' }}>O</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Foto</label>
                        <div class="col-sm-10">
                            <a target="_blank" href="{{ url('/download/foto/'.$detail->no_buku_pelaut) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-download"></i> UNDUH FILE
                            </a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Sertifikat Keahlian</label>
                        <div class="col-sm-10">
                          <a href="{{ url('/download/sertif_ahli/'.$detail->no_buku_pelaut) }}" class="btn btn-primary btn-sm" style="margin-top: 10px">
                              <i class="fa fa-download"></i> UNDUH FILE
                          </a>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Sertifikat Keterampilan</label>
                        <div class="col-sm-10">
                          <a href="{{ url('/download/sertif_terampil/'.$detail->no_buku_pelaut) }}" class="btn btn-primary btn-sm" style="margin-top: 10px">
                              <i class="fa fa-download"></i> UNDUH FILE
                          </a>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File KTP</label>
                        <div class="col-sm-10">
                          <a href="{{ url('/download/ktp/'.$detail->no_buku_pelaut) }}" class="btn btn-primary btn-sm">
                              <i class="fa fa-download"></i> UNDUH FILE
                          </a>
                      </div>
                      </div>
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
