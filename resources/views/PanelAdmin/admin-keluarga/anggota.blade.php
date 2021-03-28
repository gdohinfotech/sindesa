@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Daftar Anggota Penduduk
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
                        Daftar Anggota Penduduk
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
        <!-- start col-md-9 -->
        <div class="col-sm-12">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{ route('admin.kependudukan.add') }}" type="button" class="btn btn-info btn-sm btn-social"><i class="fa fa-plus"></i>Tambah Anggota </a>
                    <a href="{{ route('admin.keluarga.kartukeluarga') }}" type="button" class="btn btn-success btn-sm btn-social"><i class="fa fa-book"></i>Kartu Keluarga </a>
                    <a href="{{ route('admin.keluarga.index') }}" type="button" class="btn btn-primary btn-sm btn-social"><i class="fas fa-arrow-left"></i>Kembali ke Daftar Keluarga</a>
                </div>
                <!-- data identitas desa -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;" >NO KK</td><td nowrap > :  6372022311920003</td>
                                </tr>
                                <tr>
                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;" >Kepala Keluarga</td><td nowrap > : RIZKYANOOR WIDIANTORO</td>
                                </tr>									
                                <tr>
                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;" >Alamat</td><td nowrap > :  RT/RW :  002/003 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Hubungan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">1</td>
                                            <td class="">
                                                <a href="{{ route('admin.kependudukan.edit') }}" class="btn bg-orange btn-flat btn-sm" title="Ubah Biodata Penduduk"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-href="" class="btn bg-purple btn-flat btn-sm" title="Pecah KK" data-toggle="modal" data-target="#pecah-kk" ><i class="fa fa-cut"></i></a>
                                                <a href="#" data-remote="false" data-toggle="modal" data-target="#modal-lg" data-title="Ubah Hubungan Keluarga" title="Ubah Hubungan Keluarga" class="btn bg-navy btn-flat btn-sm"><i class='fa fa-link'></i></a>
                                                <a href="#" class="btn bg-maroon btn-flat btn-sm" title="Bukan anggota keluarga ini" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></a>
                                            </td>
                                            <td>6372022311920003</td>
                                            <td nowrap width="25%">RIZKYANOOR WIDIANTORO</td>
                                            <td nowrap>20 Mei 1970</td>
                                            <td>LAKI-LAKI</td>
                                            <td nowrap>KEPALA KELUARGA</td>
                                        </tr>
                                        <tr>
                                            <td class="">2</td>
                                            <td class="">
                                                <a href="{{ route('admin.kependudukan.edit') }}" class="btn bg-orange btn-flat btn-sm" title="Ubah Biodata Penduduk"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-href="" class="btn bg-purple btn-flat btn-sm" title="Pecah KK" data-toggle="modal" data-target="#confirm-status" data-body="Apakah Anda yakin ingin memecah Data Keluarga ini?"><i class="fa fa-cut"></i></a>
                                                <a href="#" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Hubungan Keluarga" title="Ubah Hubungan Keluarga" class="btn bg-navy btn-flat btn-sm"><i class='fa fa-link'></i></a>
                                                <a href="#"  class="btn bg-maroon btn-flat btn-sm" title="Bukan anggota keluarga ini" data-toggle="modal" data-target="#confirm-status" data-body="Apakah yakin akan dikeluarkan dari keluarga ini?"><i class="fa fa-times"></i></a>
                                            </td>
                                            <td>5201140301916995</td>
                                            <td nowrap width="25%">AHMAD HABIB</td>
                                            <td nowrap>03 Januari 1990</td>
                                            <td>LAKI-LAKI</td>
                                            <td nowrap>ANAK</td>
                                        </tr>
                                        <tr>
                                            <td class="">3</td>
                                            <td class="">
                                                <a href="{{ route('admin.kependudukan.edit') }}" class="btn bg-orange btn-flat btn-sm" title="Ubah Biodata Penduduk"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-href="" class="btn bg-purple btn-flat btn-sm" title="Pecah KK" data-toggle="modal" data-target="#confirm-status" data-body="Apakah Anda yakin ingin memecah Data Keluarga ini?"><i class="fa fa-cut"></i></a>
                                                <a href="#" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Hubungan Keluarga" title="Ubah Hubungan Keluarga" class="btn bg-navy btn-flat btn-sm"><i class='fa fa-link'></i></a>
                                                <a href="#" class="btn bg-maroon btn-flat btn-sm" title="Bukan anggota keluarga ini" data-toggle="modal" data-target="#confirm-status" data-body="Apakah yakin akan dikeluarkan dari keluarga ini?"><i class="fa fa-times"></i></a>
                                            </td>
                                            <td>5201145003976995</td>
                                            <td nowrap width="25%">ADINI SEPTIA LISTA</td>
                                            <td nowrap>10 Maret 1996</td>
                                            <td>PEREMPUAN</td>
                                            <td nowrap>ANAK</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /col-md-9 -->
    </div>
    <!-- /row -->
    <div class="modal fade in" id="confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                Apakah Anda yakin akan dikeluarkan dari keluarga ini?
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
    <div class="modal fade in" id="pecah-kk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                Apakah Anda yakin ingin memecah data keluarga ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class="fa fa-sign-out-alt"></i> Tutup</button>
                    <a class="btn-ok" href="">
                    <button type="button" class="btn btn-social btn-flat btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash"></i> Simpan</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Hubungan Keluarga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="row">
                        <div class='col-sm-12'>
                            <table id="tabel3" class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td style="padding-top : 10px;padding-bottom : 10px; width:40%;">NIK</td>
                                        <td> : 6372022311920003</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top : 10px;padding-bottom : 10px; width:40%;">Nama Penduduk</td>
                                        <td> : RIZKYANOOR WIDIANTORO</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class='form-group'>
                                <label for="status">Hubungan Keluarga </label>
                                <select name="kk_level" class="form-control input-sm required" style="width:100%;">
                                    <option value=""> ----- Pilih Hubungan ----- </option>
                                    <option value="1" selected="">KEPALA KELUARGA</option>
                                    <option value="2">SUAMI</option>
                                    <option value="3">ISTRI</option>
                                    <option value="4">ANAK</option>
                                    <option value="5">MENANTU</option>
                                    <option value="6">CUCU</option>
                                    <option value="7">ORANGTUA</option>
                                    <option value="8">MERTUA</option>
                                    <option value="9">FAMILI</option>
                                    <option value="10">PEMBANTU</option>
                                    <option value="11">LAINNYA</option>
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
</section>
@endsection