@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Biodata Penduduk
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                            <a href="{{ route('dasbor') }}">
                                Dasbor
                            </a>
                        </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.kependudukan.index') }}">
                        Data Penduduk
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Biodata Penduduk
                    </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<!-- /.content-header -->

<section class="content">
    <!-- start row -->
    <div class="row">
        <!-- start col-md-12 -->
        <div class="col-md-12">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="btn-group">
                            <a href="#" type="button" class="btn btn-success btn-sm btn-social "><i class="fas fa-arrow-left"></i>Manajemen Dokumen</a>
                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-social "><i class="fas fa-arrow-left"></i>Ubah Biodata</a>
                            <a href="#" type="button" class="btn btn-info btn-sm btn-social "><i class="fas fa-arrow-left"></i>Cetak Biodata</a>
                            <a href="#" type="button" class="btn btn-default btn-sm btn-social "><i class="fas fa-arrow-left"></i>Anggota Keluarga</a>
                            <a href="{{ route('admin.kependudukan.index') }}" type="button" class="btn btn-primary btn-sm btn-social "><i class="fas fa-arrow-left"></i>Kembali ke Data Penduduk</a>
                        </div>
                    </div>
                    <!-- data identitas desa -->
                    <div class="card-body">

                    </div>

                    <div class="card-footer" style="text-align: right;">
                    </div>
                    <!-- /data identitas desa -->
            </div>
            <!-- /ubah data identitas desa -->
        </div>
        <!-- /col-md-9 -->
    
    </div>
    <!-- /row -->
</section>
@endsection