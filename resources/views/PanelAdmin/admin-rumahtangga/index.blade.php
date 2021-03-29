@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Pengelompokan Rumah Tangga</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dasbor') }}">Dasbor</a></li>
                <li class="breadcrumb-item active">Data Rumah Tangga</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <div class="btn-group">
                        <button href="" type="button" class="btn btn-primary btn-sm btn-social btn-block" data-toggle="modal" data-target="#tambahRT"><i class="fa fa-plus"></i>Tambah Rumah Tangga</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm btn-social btn-block" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Pilih Aksi Lainnya</button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item btn-sm btn-social" href="#"><i class="fas fa-print"></i>Cetak</a>
                                <a class="dropdown-item btn-sm btn-social" href="#"><i class="fas fa-download"></i>Unduh</a>
                                <a class="dropdown-item btn-sm btn-social" href="#"><i class="fas fa-search"></i>Pencarian Spesifik</a>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                <table id="penduduk" class="table table-bordered table-hover w-100 d-block d-md-table text-center nowrap">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>AKSI</th>
                            <th>NO RUMAH TANGGA</th>
                            <th>KEPALA RUMAH TANGGA</th>
                            <th>NIK</th>
                            <th>JUMLAH ANGGOTA</th>
                            <th>ALAMAT</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>TANGGAL TERDAFTAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.rumahtangga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#tambahanggotaRT"><i class="fas fa-plus"></i>Tambah Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Rumah Tangga</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                      
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.rumahtangga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#tambahanggotaRT"><i class="fas fa-plus"></i>Tambah Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Rumah Tangga</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                      
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.rumahtangga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#tambahanggotaRT"><i class="fas fa-plus"></i>Tambah Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Rumah Tangga</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                      
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.rumahtangga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#tambahanggotaRT"><i class="fas fa-plus"></i>Tambah Anggota Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Rumah Tangga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Rumah Tangga</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                      
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahRT">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Rumah Tangga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="row">
                        <div class='col-sm-12'>
                            <div class='form-group'>
                                <label for="status">Kepala Rumah Tangga</label>
                                <select class="form-control form-control-sm required" name="status" >
                                    <option value="">--Silahkan cari NIK/Nama Kepala Keluarga--</option>
                                    <option value="1" >NIK : 6372022311980003 - RIDHANI</option>
                                    <option value="2" >NIK : 6372022311980003 - AHMAD FAUZI</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Silakan cari nama / NIK dari data penduduk yang sudah terinput.
                                Penduduk yang dipilih otomatis berstatus sebagai Kepala Rumah Tangga baru tersebut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="modal fade" id="tambahanggotaRT">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Anggota Rumah Tangga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Nomor Rumah Tangga</label>
                                <input type="text" class="form-control form-control-sm" value="6372022311920003" disabled></input>
                            </div>
                        </div>
                        <div class='col-sm-12'>
                            <div class='form-group'>
                                <label for="status">Kepala Keluarga (Dari penduduk yang tidak memiliki no. KK)</label>
                                <select class="form-control form-control-sm required" name="status" >
                                    <option value="">--Silahkan cari NIK/Nama Kepala Keluarga--</option>
                                    <option value="1" >NIK : 6372022311980003 - RIDHANI</option>
                                    <option value="2" >NIK : 6372022311980003 - AHMAD FAUZI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="modal fade" id="ubahdataKK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data KK</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Nomor Kartu Rumah Tangga</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Nomor KK" value="6372022311920003"></input>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="modal fade in" id="confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Hapus Data Rumah Tangga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class="fa fa-sign-out-alt"></i> Tutup</button>
                    <a class="btn-ok" href="">
                    <button type="button" class="btn btn-social btn-flat btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash"></i> Hapus</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>
</section>

@endsection