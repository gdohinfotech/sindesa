@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Data Keluarga</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dasbor') }}">Dasbor</a></li>
                <li class="breadcrumb-item active">Data Keluarga</li>
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
                        <button href="" type="button" class="btn btn-primary btn-sm btn-social btn-block" data-toggle="dropdown"><i class="fa fa-plus"></i>Tambah KK baru</button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.add') }}"><i class="fas fa-plus"></i>Tambah Penduduk Baru</a>
                            <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#tambahKK"><i class="fas fa-plus"></i>Dari Penduduk Sudah Ada</a>
                        </div>
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
                            <th>NO KK</th>
                            <th>KEPALA KELUARGA</th>
                            <th>NIK</th>
                            <th>JUMLAH ANGGOTA</th>
                            <th>ALAMAT</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>TANGGAL TERDAFTAR</th>
                            <th>TANGGAL CETAK KK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.anggota') }}"><i class="fas fa-list-ol"></i>Rincian Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="{{ route('admin.keluarga.addanggota') }}"><i class="fas fa-plus"></i>Tambah Anggota Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#ubahdataKK"><i class="fas fa-edit"></i>Ubah Data Keluarga</a>
                                    <a class="dropdown-item btn-sm btn-social" href="#" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i>Hapus Data Keluarga</a>
                                </div>
                            </div>
                            </td>
                            <td><a href="{{ route('admin.keluarga.kartukeluarga') }}">6372022311920003</a></td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td><a href="{{ route('admin.kependudukan.read') }}">6372022311920003</a></td>
                            <td>3</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td>                                                          
                            <td>23 NOVEMBER 2020</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahKK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kepala Keluarga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="row">
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
                        <!-- <div class='col-sm-12'>
                            <div class='form-group'>
                                <label for="tanggallahir">Tanggal Peristiwa</label>
                                <div class="input-group input-group-sm date">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input class="form-control form-control-sm pull-right required" id="tgl_1" name="tanggallahir" type="text" value="" data-target="#datepick" data-toggle="datetimepicker">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Nomor KK"></input>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12">
                            <div class="form-group">
                                <label>Catatan Peristiwa</label>
                                <textarea class="form-control form-control-sm" rows="3" placeholder="Catatan"></textarea>
                                <p class="small">*mati/hilang terangkan penyebabnya, pindah tuliskan alamat pindah</p>
                            </div>
                        </div> -->
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
                                <label>Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Nomor KK" value="6372022311920003"></input>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control form-control-sm" rows="3" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class='col-sm-12'>
                            <div class='form-group'>
                                <label for="status">Kelas Sosial</label>
                                <select class="form-control form-control-sm required" name="status" >
                                    <option value="">Pilih Tingkatan Keluarga Sejahtera</option>
                                    <option value="1">KELUARGA PRA SEJAHTERA</option>
                                    <option value="2">KELUARGA SEJAHTERA I</option>
                                    <option value="3">KELUARGA SEJAHTERA II</option>
                                    <option value="4">KELUARGA SEJAHTERA III</option>
                                    <option value="5">KELUARGA SEJAHTERA III PLUS</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-sm-12'>
                            <div class='form-group'>
                                <label for="tanggallahir">Tanggal Cetak Kartu Keluarga</label>
                                <div class="input-group input-group-sm date">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input class="form-control form-control-sm pull-right required" id="tgl_1" name="tanggallahir" type="text" value="" data-target="#datepick" data-toggle="datetimepicker">
                                </div>
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
                    <h4 class="modal-title">Konfirmasi Hapus Data Keluarga</h4>
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