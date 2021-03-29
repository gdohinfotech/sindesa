@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Pengaturan Surat
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dasbor') }}">
                            Dasbor
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Daftar Format Surat
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
                        <button onclick="window.location='{{ route('admin.sarana-prasarana-desa.add') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-plus"></i>
                            Tambah Data
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <!-- start tabel data penyelenggara pemerintahan desa -->
                    <table id="pemerintah-desa" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    AKSI
                                </th>
                                <th>
                                    NAMA SURAT
                                </th>
                                <th>
                                    KODE KLASIFIKASI
                                </th>
                                <th>
                                    LAMPIRAN
                                </th>
                                <th>
                                    TEMPLATE SURAT
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                    <button onclick="window.location='{{ route('admin.wil-administratif.index-RT') }}'" type="button" class="btn btn-warning btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-edit"></i>
                                        Ubah
                                    </button>

                                    <button type="button" class="btn btn-secondary btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-lock-open"></i>
                                        Non-Aktifkan
                                    </button>

                                    <button type="button" class="btn btn-danger btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-trash-alt"></i>
                                        Hapus
                                    </button>
                                    <!-- </div> -->
                                </td>
                                <td>
                                    Keterangan Pengantar
                                </td>
                                <td>
                                   S-01
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    B
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                    <button onclick="window.location='{{ route('admin.wil-administratif.index-RT') }}'" type="button" class="btn btn-warning btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-edit"></i>
                                        Ubah
                                    </button>

                                    <button type="button" class="btn btn-secondary btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-lock-open"></i>
                                        Non-Aktifkan
                                    </button>

                                    <button type="button" class="btn btn-danger btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-trash-alt"></i>
                                        Hapus
                                    </button>
                                    <!-- </div> -->
                                </td>
                                <td>
                                    Biodata Penduduk
                                </td>
                                <td>
                                    S-02
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    B
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /tabel data penyelenggara pemerintahan desa -->
                </div>

            </div>
        </div>
    <!-- end col-md-12 -->
    </div>
    <!-- /row -->
</section>
@endsection