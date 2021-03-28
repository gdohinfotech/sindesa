@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Salinan Kartu Keluarga
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
                        <a href="#">
                        Daftar Keluarga
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.keluarga.anggota') }}">
                        Daftar Anggota Keluarga
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Biodata Penduduk
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
                    <a href="=" type="button" class="btn btn-info btn-sm btn-social"><i class="fa fa-print"></i>Cetak</a>
                    <a href="=" type="button" class="btn btn-default btn-sm btn-social"><i class="fa fa-download"></i>Unduh</a>
                    <a href="{{ route('admin.keluarga.anggota') }}" type="button" class="btn btn-primary btn-sm btn-social"><i class="fas fa-arrow-left"></i>Kembali ke Daftar Anggota Keluarga</a>
                    <a href="" type="button" class="btn btn-primary btn-sm btn-social"><i class="fas fa-arrow-left"></i>Kembali ke Data Keluarga</a>
                </div>  
                <div class="card-body">
                    <h3 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h3>
                    <h5 class="text-center"><strong>No.  6372022311920003 </strong></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">ALAMAT</label>
                                <div class="col-sm-8">
                                    <p class="text-muted">: AKAR BARU</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">RT/RW</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: 002 / -</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">DESA / KELURAHAN</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: AKAR BARU </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">KECAMATAN</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: MARTAPURA TIMUR </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-5 control-label">KABUPATEN</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: BANJAR </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label">KODE POS</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: 83355</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label">PROVINSI</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: KALIMANTAN SELATAN</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label">JUMLAH ANGGOTA</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover ">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Tempat Lahir</th>
                                            <th class="text-center">Tanggal Lahir</th>
                                            <th class="text-center">Agama</th>
                                            <th class="text-center">Pendidikan</th>
                                            <th class="text-center">Jenis Pekerjaan</th>
                                            <th class="text-center">Golongan Darah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" >1</td>
                                            <td>RIZKYANOOR WIDIANTORO</td>
                                            <td>6372022311920003</td>
                                            <td>LAKI-LAKI</td>
                                            <td>BANJARMASIN</td>
                                            <td>23-11-1992</td>
                                            <td>ISLAM</td>
                                            <td>STRATA/I</td>
                                            <td>WIRASWASTA</td>
                                            <td>TIDAK TAHU</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" >2</td>
                                            <td>ULFA WIDIAWATI</td>
                                            <td>5201145203896994</td>
                                            <td>PEREMPUAN</td>
                                            <td>JOHAR PELITA</td>
                                            <td>12-03-1988</td>
                                            <td>ISLAM</td>
                                            <td>SLTA / SEDERAJAT</td>
                                            <td>WIRASWASTA</td>
                                            <td>TIDAK TAHU</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" >3</td>
                                            <td>WAYAN EKA PRAWATA</td>
                                            <td>5201142003136994</td>
                                            <td>LAKI-LAKI</td>
                                            <td>GUNUNG SARI</td>
                                            <td>20-03-2012</td>
                                            <td>ISLAM</td>
                                            <td>TIDAK / BELUM SEKOLAH</td>
                                            <td>BELUM/TIDAK BEKERJA</td>
                                            <td>TIDAK TAHU</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover ">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Status Perkawinan</th>
                                            <th class="text-center">Tanggal Perkawinan</th>
                                            <th class="text-center">Status Hubungan Dalam Keluarga</th>
                                            <th class="text-center">Kewarganegaraan</th>
                                            <th class="text-center">No. Paspor</th>
                                            <th class="text-center">No. KITAS / KITAP</th>
                                            <th class="text-center">Nama Ayah</th>
                                            <th class="text-center">Nama Ibu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" >1</td>
                                            <td>KAWIN BELUM TERCATAT</td>
                                            <td class="text-center">-</td>
                                            <td>KEPALA KELUARGA</td>
                                            <td>WNI</td>
                                            <td></td>
                                            <td></td>
                                            <td>H. ABDURRAHMAN</td>
                                            <td>NAFISAH</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" >2</td>
                                            <td>KAWIN BELUM TERCATAT</td>
                                            <td class="text-center">-</td>
                                            <td>ISTRI</td>
                                            <td>WNI</td>
                                            <td></td>
                                            <td></td>
                                            <td>ZAMHARIN</td>
                                            <td>SITIYAH</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" >3</td>
                                            <td>BELUM KAWIN</td>
                                            <td class="text-center">-</td>
                                            <td>ANAK</td>
                                            <td>WNI</td>
                                            <td></td>
                                            <td></td>
                                            <td>WAHID ALIAS H. MAHSUN</td>
                                            <td>ULFA WIDIAWATI</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td width="25%">&nbsp;</td>
                                            <td width="50%">&nbsp;</td>
                                            <td class="text-center" width="25%">Akar Baru , 27 Maret 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KEPALA KELUARGA</td>
                                            <td>&nbsp;</td>
                                            <td class="text-center">KEPALA DESA AKARBARU </td>
                                        </tr>
                                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        <tr>
                                            <td class="text-center">WAHID ALIAS H. MAHSUN</td>
                                            <td width="50%">&nbsp;</td>
                                            <td class="text-center">MUHAMMAD ILHAM </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /ubah data identitas desa -->
        </div>
        <!-- /col-md-9 -->
    
    </div>
    <!-- /row -->
</section>
@endsection