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
                                        @foreach ($surat_mohon as $item)
                                            <tr>
                                                @if ($item->status == 3)
                                                    <td colspan="7" class="text-center">
                                                        <strong>
                                                            <i> Belum Ada Data Masuk</i>
                                                        </strong>
                                                    </td>
                                                @elseif ($item->status == 1)
                                                <td class="text-center">{{ $loop->iteration }}.</td>
                                                <td>{{ $item->buku_pelaut->users->nama }}</td>
                                                <td class="text-center">{{ $item->buku_pelaut->no_buku_pelaut }}</td>
                                                <td class="text-center">
                                                    @if (empty($item->surat_balasan))
                                                        <strong>
                                                            <i>
                                                                Belum Ada Surat Balasan
                                                            </i>
                                                        </strong>
                                                    @else
                                                        <a href="{{ url('/kepala/surat_mohon/download/' . $item->id) }}" target="_blank">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $item->no_bukti_pnbp }}</td>
                                                <td class="text-center">
                                                    @if ($item->status == 0)
                                                        <button class="btn btn-secondary btn-sm">
                                                            <i class="fa fa-times"></i> Data Belum dikonfirmasi
                                                        </button>
                                                    @elseif ($item->status == 1)
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="fa fa-check"></i> Data Valid
                                                        </button>
                                                    @elseif ($item->status == 2)
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-times"></i> Data Tidak Valid
                                                        </button>
                                                    @elseif ($item->status == 3)
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="fa fa-check"></i> Disetujui
                                                        </button>
                                                    @elseif ($item->status == 4)
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-times"></i> Ditolak
                                                        </button>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('/kepala/surat_mohon/show/' . $item->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-search"></i> DETAIL
                                                    </a>
                                                </td>
                                                @endif
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
