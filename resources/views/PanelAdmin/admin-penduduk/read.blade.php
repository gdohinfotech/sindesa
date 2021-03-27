@extends('PanelAdmin.admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Biodata Penduduk
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
        <!-- start col-md-12 -->
        <div class="col-md-12">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{ route('admin.kependudukan.doc') }}" type="button" class="btn btn-success btn-sm btn-social visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-book"></i>Manajemen Dokumen</a>
                    <a href="{{ route('admin.kependudukan.edit') }}" type="button" class="btn btn-secondary btn-sm btn-social visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-edit"></i>Ubah Biodata</a>
                    <a href="#" type="button" class="btn btn-info btn-sm btn-social visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-print"></i>Cetak Biodata</a>
                    <a href="#" type="button" class="btn btn-default btn-sm btn-social visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-users"></i>Anggota Keluarga</a>
                    <a href="{{ route('admin.kependudukan.index') }}" type="button" class="btn btn-primary btn-sm btn-social visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-left"></i>Kembali ke Data Penduduk</a>
                </div>
                <!-- data identitas desa -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-header with-border">
                                <h3 class="box-title">Biodata Penduduk (NIK : 6372022311920003)</h3>
                                <p class="small">
                                    Terdaftar sebelum:
                                    <i class="fa fa-clock-o"></i>28 Mei 2019 22:45:28</p>
                                <p class="small">
                                    Terakhir diubah:
                                    <i class="fa fa-clock-o"></i>30 Juli 2020 11:30:21 <i class="fa fa-user"></i> Administrator</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" >
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <img class="penduduk profile-user-img img-responsive img-circle" src="{{ asset('AdminLTE/dist/img/avatar.png') }}" alt="Foto">
                                        </td>
                                    </tr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" >
                                            <tbody>
                                                <tr>
                                                    <td>Status Dasar</td><td >:</td><td><span class=""><strong>HIDUP</strong></span></td>
                                                </tr>
                                                <tr>
                                                    <td width="300">Nama</td>
                                                    <td width="1">:</td>
                                                    <td>RIZKYANOOR WIDIANTORO</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Kepemilikan KTP</td><td >:</td>
                                                    <td>
                                                        <table class="table table-bordered table-striped table-hover detail">
                                                            <tr>
                                                                <th>Wajib KTP</th>
                                                                <th>KTP-EL</th>
                                                                <th>Status Rekam</th>
                                                                <th>Tag ID Card</th>
                                                            </tr>
                                                            <tr>
                                                                <td>WAJIB</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Kartu Keluarga</td><td >:</td>
                                                    <td>
                                                        6372022311920003																															</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor KK Sebelumnya</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hubungan Dalam Keluarga</td><td >:</td><td>KEPALA KELUARGA</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td><td >:</td><td>LAKI-LAKI</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td><td >:</td><td>ISLAM</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Penduduk</td><td >:</td><td>TETAP</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>DATA KELAHIRAN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Akta Kelahiran</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat / Tanggal Lahir</td><td >:</td><td>BANJARMASIN / 23-11-1992</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Dilahirkan</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelahiran</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Kelahiran Anak Ke</td><td >:</td><td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Penolong Kelahiran</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Berat Lahir</td><td >:</td><td>0 Gram</td>
                                                </tr>
                                                <tr>
                                                    <td>Panjang Lahir</td><td >:</td><td> cm</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>PENDIDIKAN DAN PEKERJAAN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan dalam KK</td><td >:</td><td>STRATA I</td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan sedang ditempuh</td><td >:</td><td>TIDAK SEDANG SEKOLAH</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td><td >:</td><td>KARYAWAN SWASTA</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>DATA KEWARGANEGARAAN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Warga Negara</td><td >:</td><td>WNI</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Paspor</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Berakhir Paspor</td><td >:</td><td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor KITAS/KITAP</td><td >:</td><td>0</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>ORANG TUA</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>NIK Ayah</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ayah</td><td >:</td><td>DONNY WIDIASMORO</td>
                                                </tr>
                                                <tr>
                                                    <td>NIK Ibu</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ibu</td><td >:</td><td>NOOR CHALIDAH</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>ALAMAT</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Telepon</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Email</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Dusun</td><td >:</td><td>MANGSIT</td>
                                                </tr>
                                                <tr>
                                                    <td>RT/ RW</td><td >:</td><td>004 / -</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Sebelumnya</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>STATUS KAWIN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Status Kawin</td><td >:</td><td>KAWIN BELUM TERCATAT</td>
                                                </tr>
                                                <tr>
                                                    <td>Akta perkawinan</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal perkawinan</td><td >:</td><td>-</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>DATA KESEHATAN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>Golongan Darah</td><td >:</td><td>TIDAK TAHU</td>
                                                </tr>
                                                <tr>
                                                    <td>Cacat</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sakit Menahun</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Akseptor KB</td><td >:</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Asuransi</td><td >:</td><td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>PROGRAM BANTUAN</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table class="table table-bordered table-striped table-hover detail">
                                                            <tr>
                                                                <th class="padat">No</th>
                                                                <th>Waktu / Tanggal</th>
                                                                <th>Nama Program</th>
                                                                <th>Keterangan</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>13 Dec 2020 - 13 Dec 2020</td>
                                                                <td><a href="http://localhost/opensid/index.php/program_bantuan/data_peserta/9">JAMKESMAS</a></td>
                                                                <td>Jamkesmas ( akronim dari Jaminan Kesehatan Masyarakat ) adalah sebuah program jaminan kesehatan untuk warga Indonesia yang memberikan perlindungan sosial dibidang kesehatan untuk menjamin masyarakat miskin dan tidak mampu yang iurannya dibayar oleh pemerintah agar kebutuhan dasar kesehatannya yang layak dapat terpenuhi.Program ini dijalankan oleh Departemen Kesehatan sejak 2020.</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" class="subtitle_head"><strong>DOKUMEN / KELENGKAPAN PENDUDUK</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table class="table table-bordered table-striped table-hover detail">
                                                            <tr>
                                                                <th class="padat">No</th>
                                                                <th>Nama Dokumen</th>
                                                                <th>File</th>
                                                                <th>Tanggal Upload</th>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="card-footer" style="text-align: right;">
                </div>
            </div>
            <!-- /ubah data identitas desa -->
        </div>
        <!-- /col-md-9 -->
    </div>
    <!-- /row -->
</section>
@endsection