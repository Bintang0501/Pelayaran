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
					<h3 class="card-title">Tambah Data Buku Pelaut</h3>
				  </div>
				  <!-- /.card-header -->
                  <form action="{{ url('/warga/buku_pelaut/store') }}" method="POST">
                    @csrf
                      <div class="card-body">
                        <a href="{{ url('/warga/buku_pelaut') }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px">
                            <i class="fa fa-reply"></i> KEMBALI
                        </a><br>
                      <div class="form-group">
                        <label>No Buku Pelaut</label>
                        <input type="text" name="no_buku_pelaut" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label>Kode Pelaut</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label>No Pendaftaran</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label>Tempat</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                        <label>Tempat</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label>Peran Akun</label>
                        <select name="role" class="form-control">
                          <option value="">~~ Silahkan Pilih ~~</option>
                          <option value="admin">Admin</option>
                          <option value="petugas">Petugas</option>
                          <option value="kepala">Kepala</option>
                          <option value="warga">Warga</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>

                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> RESET
                      </button>
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-save"></i> SIMPAN
                      </button>

                    </div>
                    <!-- /.card-body -->
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
