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
                                <h3 class="card-title">Data Surat Permohonan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <a href="{{ url('/warga/surat_mohon/create') }}" class="btn btn-primary btn-sm"
                                        style="margin-bottom: 10px">
                                        <i class="fa fa-plus"></i> TAMBAH
                                    </a>

                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama</th>
                                            <th class="text-center">No Buku</th>
                                            <th class="text-center">File Surat Balesan</th>
                                            <th class="text-center">No Bukti PNBP</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td>{{ $surat_mohon->buku_pelaut->users->nama }}</td>
                                                <td class="text-center">{{ $surat_mohon->buku_pelaut->no_buku_pelaut }}</td>
                                                <td class="text-center">
                                                    @if (empty($surat_mohon->surat_balasan))
                                                        <strong>
                                                            <i>
                                                                Belum Ada Surat Balasan
                                                            </i>
                                                        </strong>
                                                    @else
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $surat_mohon->no_bukti_pnbp }}</td>
                                                <td class="text-center">
                                                    @if ($surat_mohon->status == 0)
                                                        <button class="btn btn-secondary btn-sm">
                                                            <i class="fa fa-times"></i> Data Belum dikonfirmasi
                                                        </button>
                                                    @elseif ($surat_mohon->status == 1)
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="fa fa-check"></i> Data Valid
                                                        </button>
                                                    @elseif ($surat_mohon->status == 2)
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-times"></i> Data Tidak Valid
                                                        </button>
                                                    @elseif ($surat_mohon->status == 3)
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="fa fa-check"></i> Disetujui
                                                        </button>
                                                    @elseif ($surat_mohon->status == 4)
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-times"></i> Ditolak
                                                        </button>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('/petugas/surat_mohon/show/' . $surat_mohon->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-search"></i> DETAIL
                                                    </a>
                                                </td>
                                            </tr>
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
