@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Sarana dan Prasarana Desa
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
                        <a href="{{ route('admin.sarana-prasarana-desa.index') }}">
                        Daftar Sarana dan Prasarana Desa
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Tambah Data Sarana dan Prasarana Desa
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
                        <button onclick="window.location='{{ route('admin.sarana-prasarana-desa.index') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-arrow-left"></i>
                            Kembali ke Daftar Sarana dan Prasarana Desa
                        </button>
                    </div>
                </div>

                <!-- tambah data RW -->
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Nama / Jenis
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih Nama dan Jenis --
                                </option>
                                <option>
                                    Kode Reg : 3.01.01.21.000 - BANGUNAN PETERNAKAN / PERIKANAN
                                </option>
                                <option>
                                    Kode Reg : 3.01.01.22.000 - BANGUNAN GEDUNG TEMPAT KERJA LAINNYA
                                </option>
                                <option>
                                    Kode Reg : 3.01.01.23.000 - BANGUNAN FASILITAS UMUM 
                                </option>
                            </select>
                        </div>   
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Kode
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control rounded-0" placeholder="61.08.01.2017.01.2021">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Nomor Register
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control rounded-0" placeholder="3.01.01.21.000.00001">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Kondisi
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih Kondisi --
                                </option>
                                <option>
                                    B - Baik
                                </option>
                                <option>
                                    KB - Kurang Baik
                                </option>
                                <option>
                                    R - Rusak
                                </option>
                                <option>
                                    RB - Rusak Berat
                                </option>
                            </select>
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Kategori
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih Kategori --
                                </option>
                                <option>
                                    Milik Desa
                                </option>
                                <option>
                                    Non Milik Desa
                                </option>
                            </select>
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Status
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih Status --
                                </option>
                                <option>
                                    Bantuan Pusat
                                </option>
                                <option>
                                    Bantuan Provinsi
                                </option>
                                <option>
                                    Bantuan Kabupaten
                                </option>
                                <option>
                                    Pembelian Sendiri
                                </option>
                                <option>
                                    Hibah
                                </option>
                            </select>
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Asal Usul
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih Asal Usul --
                                </option>
                                <option>
                                    APBN
                                </option>
                                <option>
                                    APBD Provinsi
                                </option>
                                <option>
                                    APBD Kabupaten
                                </option>
                                <option>
                                    APBDes
                                </option>
                                <option>
                                    CSR Perusahaan
                                </option>
                                <option>
                                    Hibah perorangan
                                </option>
                            </select>
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Biaya
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <div class="input-group mb-3">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        Rp.
                                    </button>
                                </span>
                                <input type="text" class="form-control rounded-0">
                            </div>
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Keterangan
                            </label>    
                        </div>
                        <div class="col-md-10">
                            <textarea class="form-control" style="resize:none;"></textarea>
                        </div>
                    </div>

                </div>
                <!-- tambah data RW -->

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