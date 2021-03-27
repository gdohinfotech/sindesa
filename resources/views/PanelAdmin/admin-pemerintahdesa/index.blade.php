@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Pemerintahan Desa
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
                        Daftar Penyelenggara Pemerintahan Desa
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
                        <button onclick="window.location='{{ route('admin.wil-administratif.add-RW') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-plus"></i>
                            Tambah Aparat Pemerintahan Desa
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
                                    Aksi
                                </th>
                                <th>
                                    RW
                                </th>
                                <th>
                                    Ketua RW
                                </th>
                                <th>
                                    NIK Ketua RW
                                </th>
                                <th>
                                    RT
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
                                    <button onclick="window.location='{{ route('admin.wil-administratif.index-RT') }}'" type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                        <i class="fas fa-layer-group"></i>
                                        Lihat Rincian
                                    </button>

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
                                    Aliansyah
                                </td>
                                <td>
                                    63031517******** 
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    744
                                </td>
                                <td>
                                    368
                                </td>
                                <td>
                                    376
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <!-- <div class="btn-group"> -->
                                        <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown">
                                            <i class="fas fa-layer-group"></i>
                                            Lihat Rincian
                                        </button>

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
                                    1
                                </td>
                                <td>
                                    92
                                </td>
                                <td>
                                    364
                                </td>
                                <td>
                                    184
                                </td>
                                <td>
                                    180
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