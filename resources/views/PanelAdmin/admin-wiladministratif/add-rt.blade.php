@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Wilayah Administratif Desa
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
                        <a href="{{ route('admin.wil-administratif.index-RT') }}">
                        Daftar Wilayah RT
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Tambah Data RT
                    </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <!-- start row -->
    <div class="row">
        <!-- start col-md-12 -->
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="btn-group">
                        <button onclick="window.location='{{ route('admin.wil-administratif.index-RT') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-arrow-left"></i>
                            Kembali ke Daftar RT
                        </button>
                    </div>
                </div>

                <!-- tambah data RT -->
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>
                                    Nama RT
                                </label>    
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control rounded-0" placeholder="Nama RT">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>
                                    NIK / Kepala RT
                                </label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>
                                        -- Silahkan Masukkan NIK / Nama --
                                    </option>
                                    <option>
                                        63031554******** / JASIMAH
                                    </option>
                                    <option>
                                        63030543******** / NAFI'AH
                                    </option>
                                    <option>
                                        63031528******** / M. MUHIB BUDIN 
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tambah data RT -->

                <div class="card-footer" style="text-align: right;">
                    <button type="submit" class="btn btn-danger btn-social"><i class="fas fa-eraser"></i>
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-social" type="submit"><i class="fas fa-check"></i>
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    <!-- end col-md-12 -->
    </div>
    <!-- /row -->
</section>
@endsection