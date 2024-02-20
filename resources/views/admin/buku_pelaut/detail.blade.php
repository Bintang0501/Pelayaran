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
                  <form action="{{ url('/super_admin/buku_pelaut/update/'.$detail['no_buku_pelaut']) }}" method="POST" class="form-horizontal"
                  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="card-body">
                        <a href="{{ url('/super_admin/buku_pelaut') }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px">
                            <i class="fa fa-reply"></i> KEMBALI
                        </a><br>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">
                                <strong>{{ $detail['users']['nama'] }}</strong>
                            </label>
                        </div>
                      </div>    
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Pelaut</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">
                                <strong>{{ $detail['kd_pelaut'] }}</strong>
                            </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Pendaftaran</label>
                        <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label">
                            <strong>{{ $detail['no_pendaftaran'] }}</strong>
                        </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">
                                <strong>{{ $detail['tempat'] }}</strong>
                            </label>
                        </div>
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">
                                <strong>{{ $detail['tgl_lahir'] }}</strong>
                            </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..." readonly>{{ $detail['alamat'] }}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Rambut</label>
                        <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label">
                            <strong>{{ $detail['warna_rambut'] }}</strong>
                        </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Mata</label>
                        <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label">
                            <strong>{{ $detail['warna_mata'] }}</strong>
                        </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Kulit</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">
                                <strong>{{ $detail['warna_kulit'] }}</strong>
                            </label>                           
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label">
                            <strong>{{ $detail['tinggi_badan'] }}</strong>
                        </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label">
                            <strong>{{ $detail['gol_darah'] }}</strong>
                        </label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Foto</label>
                        <div class="col-sm-10">
                            <a target="_blank" href="" class="btn btn-primary btn-sm">
                                <i class="fa fa-download"></i> UNDUH FILE
                            </a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Sertifikat Keahlian</label>
                        <div class="col-sm-10">
                            <a target="_blank" href="" class="btn btn-primary btn-sm" style="margin-top: 10px">
                                <i class="fa fa-download"></i> UNDUH FILE
                            </a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Sertifikat Keterampilan</label>
                        <div class="col-sm-10">
                            <a target="_blank" href="" class="btn btn-primary btn-sm" style="margin-top: 10px">
                                <i class="fa fa-download"></i> UNDUH FILE
                            </a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File KTP</label>
                        <div class="col-sm-10">
                            <a target="_blank" href="" class="btn btn-primary btn-sm">
                                <i class="fa fa-download"></i> UNDUH FILE
                            </a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            @if ($detail['status'] == '1')
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-check"></i> Data Valid
                                </button>
                            @elseif ($detail['status'] == '2')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-times"></i> Data Tidak Valid
                                </button>
                            @elseif ($detail['status'] == '3')
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-check"></i> Disetujui
                                </button>
                            @elseif ($detail['status'] == '4')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-times"></i> Ditolak
                                </button>
                            @endif
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
