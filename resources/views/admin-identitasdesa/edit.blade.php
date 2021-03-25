@extends('admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Identitas Desa
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
                        <a href="{{ route('admin.identitas-desa.index') }}">
                        Identitas Desa
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Ubah Identitas Desa
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
        
        <!-- start col-md-3 -->
        <div class="col-md-3">
                <!-- ubah gambar -->
                <div class="card card-primary card-outline">
                    <!-- lambang desa -->
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="img-fluid pad" src="{{ asset('images/logo-desa.png') }}" alt="gambar lambang desa">
                            <br />
                            <h3 class="profile-username text-center">
                                Logo Desa
                            </h3>
                            <br />
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat">
                                            Cari file
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- lambang desa -->
                </div>
                
                <div class="card card-primary card-outline">
                    <!-- kantor desa -->
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="img-fluid pad" src="{{ asset('images/balai desa.jpeg') }}" alt="logo desa">
                            <br />
                            <h3 class="profile-username text-center">
                                Kantor Desa
                            </h3>
                            <br />
                            <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-0">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        Cari file
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- kantor desa -->
                </div>
                <!-- /ubah gambar -->
        </div>
        <!-- /col-md-3 -->

        <!-- start col-md-9 -->
        <div class="col-md-9">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                    <div class="card-header">
                        <button onclick="window.location='{{ route('admin.identitas-desa.index') }}'" type="submit" class="btn btn-outline-primary btn-sm">
                            Kembali ke Data Identitas Desa
                        </button>
                    </div>
                    <!-- data identitas desa -->
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Nama Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kode Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kode Pos Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kepala Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        NIP Kepala Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Alamat Kantor Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" style="resize:none;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        E-mail Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Telpon Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Website Desa
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Nama Kecamatan
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kode Kecamatan
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Nama Camat
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        NIP Camat
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Nama Kabupaten
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kode Kabupaten
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Nama Provinsi
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>
                                        Kode Provinsi
                                    </label>    
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer" style="text-align: right;">
                    
                        <button type="submit" class="btn btn-danger">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary" type="submit">
                            Simpan
                        </button>
                       
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