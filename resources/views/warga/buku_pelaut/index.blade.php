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
					<h3 class="card-title">Data Buku Pelaut</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<table id="example2" class="table table-bordered table-hover">
						<a href="{{ url('/warga/buku_pelaut/create') }}" class="btn btn-primary btn-sm" style="margin-bottom: 10px">
							<i class="fa fa-plus"></i> TAMBAH 
						</a>

					  <thead>
					  <tr>
						<th class="text-center">No</th>
						<th>Nama</th>
						<th>Email</th>
						<th class="text-center">Role</th>
						<th class="text-center">Aksi</th>
					  </tr>
					  </thead>
					  <tbody>
						@foreach ($buku_pelaut as $item)
							<tr>
								<td class="text-center">{{ $loop->iteration }}.</td>
								<td>{{ $item['nama'] }}</td>
								<td>{{ $item['email'] }}</td>
								<td class="text=center">{{ $item['role'] }}</td>
								<td class="text-center">
									@if ($item['id'] == Auth::user()->id)
										-
									@else
									<a href="{{ url('/super_admin/pengguna/edit/'.$item['id']) }}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> EDIT
									</a>
									<form action="{{ url('/super_admin/pengguna/destroy/'.$item['id']) }}" method="POST" style="display: inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i> HAPUS
										</button>
									</form>
									@endif
								</td>
							</tr>
						@endforeach
					  </tbody>
					</table>
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
