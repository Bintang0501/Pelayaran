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
					<h3 class="card-title">Detail Surat Permohonan</h3>
				  </div>
				  <!-- /.card-header -->
                  <form action="{{ url('/warga/surat_mohon/store') }}" method="POST" class="form-horizontal"
                  enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">
                        <a href="{{ url('/warga/surat_mohon') }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px">
                            <i class="fa fa-reply"></i> KEMBALI
                        </a><br>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Pelaut</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail->buku_pelaut->kd_pelaut }}" readonly name="kd_pelaut" class="form-control" placeholder="masukkan kode pelaut">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Bukti PNBP</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $detail['no_bukti_pnbp'] }}" readonly name="no_bukti_pnbp" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Persyaratan</label>
                        <div class="col-sm-10">
                          <a href="" class="btn btn-primary btn-sm">
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
