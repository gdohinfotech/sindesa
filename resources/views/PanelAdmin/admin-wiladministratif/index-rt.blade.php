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
                        <a href="{{ route('admin.wil-administratif.index-RW') }}">
                        Daftar Wilayah RW
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Daftar Wilayah RT
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
                        <button onclick="window.location='{{ route('admin.wil-administratif.add-RT') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-plus"></i>
                            Tambah RT
                        </button>
                    </div>
                </div>
                <div class="card-header">
                    <h2 class="card-title">
                        Desa Akar Baru / RW 1
                    </h2>
                </div>

                <div class="card-body">
                    <!-- start tabel data RW -->
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Aksi
                                </th>
                                <th>
                                    RT
                                </th>
                                <th>
                                    Ketua RT
                                </th>
                                <th>
                                    NIK Ketua RT
                                </th>
                                <th>
                                    KK
                                </th>
                                <th>
                                    L+P
                                </th>
                                <th>
                                    L
                                </th>
                                <th>
                                    P
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
                                    <button type="button" class="btn btn-warning btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-edit"></i>
                                        Ubah
                                    </button>

                                    <button type="button" class="btn btn-danger btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-trash-alt"></i>
                                        Hapus
                                    </button>
                                    <!-- </div> -->
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    Muhammad Rumzy
                                </td>
                                <td>
                                    63031514********
                                </td>
                                <td>
                                    80
                                </td>
                                <td>
                                    258
                                </td>
                                <td>
                                    150
                                </td>
                                <td>
                                    108
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-warning btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-edit"></i>
                                            Ubah
                                        </button>

                                        <button type="button" class="btn btn-danger btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-trash-alt"></i>
                                            Hapus
                                        </button>
                                    <!-- </div> -->
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    Muhammad Ramadani
                                </td>
                                <td>
                                    63031501********
                                </td>
                                <td>
                                    104
                                </td>
                                <td>
                                    486
                                </td>
                                <td>
                                    200
                                </td>
                                <td>
                                    286
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /tabel data RW -->
                </div>

            </div>
        </div>
    <!-- end col-md-12 -->
    </div>
    <!-- /row -->
</section>
@endsection