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
                            <a href="#">
                                Dasbor
                            </a>
                        </li>
                    <li class="breadcrumb-item active">
                        Identitas Desa
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
        <div class="card card-outline card-info">
            <div class="card-header">
                <!-- <h3 class="card-title">
                    Summernote
                </h3> -->

                <button onclick="window.location='{{ route('admin.identitas-desa.edit') }}'" type="submit" class="btn btn-outline-primary btn-sm">
                    Ubah Data Desa
                </button>
                <!-- <button type="submit" class="btn btn-outline-primary btn-sm">
                    Lokasi Kantor Desa
                </button>
                <button type="submit" class="btn btn-outline-primary btn-sm">
                    Lokasi Kantor Desa
                </button> -->
            </div>
            <div class="card-body">
                <div style="text-align: center">
                    <img class="img-fluid pad" src="{{ asset('images/balai desa.jpeg') }}" alt="Photo" style="center">
                </div>
            </div>

            <div class="card-header">
            </div>

            <div class="card-body">
                <!-- start table -->
                <div class="card-body table-responsive p-0">

                    <!-- data tabel desa -->
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr style="background-color:#caf7e3;">
                                <th colspan="3">
                                    Desa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Desa</td>
                                <td>:</td>
                                <td>Akar Baru</td>
                            </tr>
                            <tr>
                                <td>Kode Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Kode Pos Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Kepala Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>NIP Kepala Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Alamat Kantor Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>E-mail Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Telpon Desa</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Website Desa</td>
                                <td>:</td>
                                <td>https://akarbaru.desa.id</td>
                            </tr>
                        </tbody>
                    <!-- </table> -->
                    <!-- /data tabel desa -->

                    <tr>
                    <td></td>
                    </tr>
                    

                    <!-- data tabel kecamatan -->
                    <!-- <table class="table table-hover text-nowrap"> -->
                        <thead>
                            <tr style="background-color:#caf7e3;">
                                <th colspan="3">
                                    Kecamatan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Kecamatan</td>
                                <td>:</td>
                                <td>Martapura Timur</td>
                            </tr>
                            <tr>
                                <td>Kode Kecamatan</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>Nama Camat</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                            <tr>
                                <td>NIP Camat</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                        </tbody>

                    <!-- </table> -->
                    <!-- /data tabel kecamatan -->

                    <tr>
                    <td></td>
                    </tr>

                    <!-- data tabel kabupaten -->
                    <!-- <table class="table table-hover text-nowrap"> -->
                        <thead>
                            <tr style="background-color:#caf7e3;">
                                <th colspan="3">
                                    Kabupaten
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Kabupaten</td>
                                <td>:</td>
                                <td>Banjar</td>
                            </tr>
                            <tr>
                                <td>Kode Kabupaten</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                        </tbody>
                    <!-- </table> -->
                    <!-- /data tabel kabupaten -->

                    <tr>
                    <td></td>
                    </tr>

                    <!-- data tabel provinsi -->
                    <!-- <table class="table table-hover text-nowrap"> -->
                        <thead>
                            <tr style="background-color:#caf7e3;">
                                <th colspan="3">
                                    Provinsi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Provinsi</td>
                                <td>:</td>
                                <td>Kalimantan Selatan</td>
                            </tr>
                            <tr>
                                <td>Kode Provinsi</td>
                                <td>:</td>
                                <td>xxxxx</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /data tabel provinsi -->

                </div>
                <!-- /table -->
            </div>

            <!-- <div class="card-footer">
                    "Visit "
                    <a href="https://github.com/summernote/summernote/">Summernote</a>
                    " documentation for more examples and information about the plugin. "
             
            </div> -->
        </div>
    </div>
    <!-- end col-md-12 -->
</div>
<!-- /row -->
</section>
@endsection