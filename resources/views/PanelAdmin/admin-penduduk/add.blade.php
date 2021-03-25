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
        <!-- start col-md-3 -->
        <div class="col-md-3">
                <div class="card card-info card-outline">
                    <!-- Foto Penduduk -->
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/avatar.png') }}" alt="Gambar Profil">
                            <br />
                            <p class="-center">
                                (kosongkan jika tidak ingin mengubah gambar)
                            </p>
                            <br />
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-sm btn-flat"><i class="fas fa-search"></i></button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- Foto Penduduk -->
                </div>
        </div>
        <!-- /col-md-3 -->

        <!-- start col-md-9 -->
        <div class="col-md-9">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="btn-group">
                            <a href="{{ route('admin.kependudukan.index') }}" type="button" class="btn btn-primary btn-sm btn-social btn-block"><i class="fas fa-arrow-left"></i>Kembali ke Data Penduduk</a>
                        </div>
                    </div>
                    <!-- data identitas desa -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" class="form-control form-control-sm" id="NIK" placeholder="Nomor NIK">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama">Status Kepemilikan KTP</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead class="bg-gray disabled color-palette">
                                                <tr>
                                                    <th width="25%">Wajib KTP</th>
                                                    <th>KTP Elektrtonik</th>
                                                    <th>Status Rekam</th>
                                                    <th>Tag ID Card</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="25%"></td>
                                                    <td>
                                                    <select name="ktp_el" class="form-control form-control-sm">
                                                        <option value="">Pilih KTP-EL</option>
                                                        <option value="1">BELUM</option>
                                                        <option value="2">KTP-EL</option>
                                                    </select>
                                                    </td>
                                                    <td width="25%">
                                                    <select name="status_rekam" class="form-control form-control-sm">
                                                        <option value="">Pilih Status Rekam</option>
                                                        <option value="1">BELUM WAJIB</option>
                                                        <option value="2">BELUM REKAM</option>
                                                        <option value="3">SUDAH REKAM</option>
                                                        <option value="4">CARD PRINTED</option>
                                                        <option value="5">PRINT READY RECORD</option>
                                                        <option value="6">CARD SHIPPED</option>
                                                        <option value="7">SENT FOR CARD PRINTING</option>
                                                        <option value="8">CARD ISSUED</option>
                                                    </select>
                                                    </td>
                                                    <td width="25%">
                                                    <input name="tag_id_card" class="form-control form-control-sm digits" type="text" minlength="10" maxlength="15" placeholder="Tag Id Card" value="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="no_kk_sebelumnya">Nomor KK Sebelumnya</label>
                                    <input id="no_kk_sebelumnya" name="no_kk_sebelumnya" class="form-control form-control-sm nik" maxlength="30" type="text" placeholder="No KK Sebelumnya" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                                            <label for="kk_level">Hubungan Dalam Keluarga</label>
                                    <select class="form-control form-control-sm " name="kk_level">
                                        <option value="">Pilih Hubungan Keluarga</option>
                                        <option value="1">KEPALA KELUARGA</option>
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
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="sex">Jenis Kelamin </label>
                                    <select class="form-control form-control-sm required" name="sex" onchange="show_hide_hamil($(this).find(':selected').val());">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="1" >Laki-Laki</option>
                                        <option value="2"  >Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-sm-7'>
                                <div class='form-group'>
                                    <label for="agama_id">Agama</label>
                                    <select class="form-control form-control-sm required" name="agama_id">
                                        <option value="">Pilih Agama</option>
                                        <option value="1" >ISLAM</option>
                                        <option value="2" >KRISTEN</option>
                                        <option value="3" >KATHOLIK</option>
                                        <option value="4" >HINDU</option>
                                        <option value="5" >BUDHA</option>
                                        <option value="6" >KHONGHUCU</option>
                                        <option value="7" >KEPERCAYAAN TERHADAP TUHAN YME / LAINNYA</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-5'>
                                <div class='form-group'>
                                    <label for="status">Status Penduduk </label>
                                    <select class="form-control form-control-sm required" name="status" >
                                        <option value="">Pilih Status Penduduk</option>
                                        <option value="1" >TETAP</option>
                                        <option value="2" >TIDAK TETAP</option>
                                        <option value="3" >PENDATANG</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>DATA KELAHIRAN :</strong></label>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="akta_lahir">Nomor Akta Kelahiran </label>
                                    <input id="akta_lahir" name="akta_lahir" class="form-control form-control-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Kelahiran" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-8'>
                                <div class='form-group'>
                                    <label for="tempatlahir">Tempat Lahir</label>
                                    <input id="tempatlahir" name="tempatlahir" class="form-control form-control-sm required" maxlength="100" type="text" placeholder="Tempat Lahir" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm pull-right required" id="tgl_1" name="tanggallahir" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="waktulahir">Waktu Kelahiran </label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm pull-right" id="jammenit_1" name="waktu_lahir" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="tempat_dilahirkan">Tempat Dilahirkan</label>
                                    <select class="form-control form-control-sm" name="tempat_dilahirkan">
                                        <option value="">Pilih Tempat Dilahirkan</option>
                                        <option value="1" >RS/RB</option>
                                        <option value="2" >PUSKEMAS</option>
                                        <option value="3" >POLINDES</option>
                                        <option value="4" >RUMAH</option>
                                        <option value="5" >LAINNYA</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class='row'>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="jenis_kelahiran">Jenis Kelahiran</label>
                                            <select class="form-control input-sm" name="jenis_kelahiran">
                                                <option value="">Pilih Jenis Kelahiran</option>
                                                <option value="1" >TUNGGAL</option>
                                                <option value="2" >KEMBAR 2</option>
                                                <option value="3" >KEMBAR 3</option>
                                                <option value="4" >KEMBAR 4</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="kelahiran_anak_ke">Anak Ke <code>(Isi dengan angka)</code></label>
                                            <input id="kelahiran_anak_ke" name="kelahiran_anak_ke" class="form-control form-control-sm number" maxlength="2" type="text" placeholder="Anak Ke" value=""></input>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="penolong_kelahiran">Penolong Kelahiran</label>
                                            <select class="form-control form-control-sm" name="penolong_kelahiran">
                                                <option value="">Pilih Penolong Kelahiran</option>
                                                <option value="1" >DOKTER</option>
                                                <option value="2" >BIDAN PERAWAT</option>
                                                <option value="3" >DUKUN</option>
                                                <option value="4" >LAINNYA</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class='row'>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="berat_lahir">Berat Lahir <code>( Gram )</code></label>
                                            <input id="berat_lahir" name="berat_lahir" class="form-control form-control-sm number" maxlength="6" type="text" placeholder="Berat Lahir" value=""></input>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="panjang_lahir">Panjang Lahir <code>( cm )</code></label>
                                            <input id="panjang_lahir" name="panjang_lahir" class="form-control form-control-sm number" maxlength="3" type="text" placeholder="Panjang Lahir" value=""></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>PENDIDIKAN DAN PEKERJAAN :</strong></label>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="pendidikan_kk_id">Pendidikan Dalam KK </label>
                                    <select class="form-control form-control-sm required" name="pendidikan_kk_id">
                                        <option value="">Pilih Pendidikan (Dalam KK) </option>
                                        <option value="1" >TIDAK / BELUM SEKOLAH</option>
                                        <option value="2" >BELUM TAMAT SD/SEDERAJAT</option>
                                        <option value="3" >TAMAT SD / SEDERAJAT</option>
                                        <option value="4" >SLTP/SEDERAJAT</option>
                                        <option value="5" >SLTA / SEDERAJAT</option>
                                        <option value="6" >DIPLOMA I / II</option>
                                        <option value="7" >AKADEMI/ DIPLOMA III/S. MUDA</option>
                                        <option value="8" >DIPLOMA IV/ STRATA I</option>
                                        <option value="9" >STRATA II</option>
                                        <option value="10" >STRATA III</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="pendidikan_sedang_id">Pendidikan Sedang Ditempuh </label>
                                    <select class="form-control form-control-sm" name="pendidikan_sedang_id" >
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="1" >BELUM MASUK TK/KELOMPOK BERMAIN</option>
                                        <option value="2" >SEDANG TK/KELOMPOK BERMAIN</option>
                                        <option value="3" >TIDAK PERNAH SEKOLAH</option>
                                        <option value="4" >SEDANG SD/SEDERAJAT</option>
                                        <option value="5" >TIDAK TAMAT SD/SEDERAJAT</option>
                                        <option value="6" >SEDANG SLTP/SEDERAJAT</option>
                                        <option value="7" >SEDANG SLTA/SEDERAJAT</option>
                                        <option value="8" >SEDANG  D-1/SEDERAJAT</option>
                                        <option value="9" >SEDANG D-2/SEDERAJAT</option>
                                        <option value="10" >SEDANG D-3/SEDERAJAT</option>
                                        <option value="11" >SEDANG  S-1/SEDERAJAT</option>
                                        <option value="12" >SEDANG S-2/SEDERAJAT</option>
                                        <option value="13" >SEDANG S-3/SEDERAJAT</option>
                                        <option value="14" >SEDANG SLB A/SEDERAJAT</option>
                                        <option value="15" >SEDANG SLB B/SEDERAJAT</option>
                                        <option value="16" >SEDANG SLB C/SEDERAJAT</option>
                                        <option value="17" >TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB</option>
                                        <option value="18" >TIDAK SEDANG SEKOLAH</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="pekerjaan_id">Pekerjaaan</label>
                                    <select class="form-control form-control-sm required" name="pekerjaan_id">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="1" >BELUM/TIDAK BEKERJA</option>
                                        <option value="2" >MENGURUS RUMAH TANGGA</option>
                                        <option value="3" >PELAJAR/MAHASISWA</option>
                                        <option value="4" >PENSIUNAN</option>
                                        <option value="5" >PEGAWAI NEGERI SIPIL (PNS)</option>
                                        <option value="6" >TENTARA NASIONAL INDONESIA (TNI)</option>
                                        <option value="7" >KEPOLISIAN RI (POLRI)</option>
                                        <option value="8" >PERDAGANGAN</option>
                                        <option value="9" >PETANI/PEKEBUN</option>
                                        <option value="10" >PETERNAK</option>
                                        <option value="11" >NELAYAN/PERIKANAN</option>
                                        <option value="12" >INDUSTRI</option>
                                        <option value="13" >KONSTRUKSI</option>
                                        <option value="14" >TRANSPORTASI</option>
                                        <option value="15" >KARYAWAN SWASTA</option>
                                        <option value="16" >KARYAWAN BUMN</option>
                                        <option value="17" >KARYAWAN BUMD</option>
                                        <option value="18" >KARYAWAN HONORER</option>
                                        <option value="19" >BURUH HARIAN LEPAS</option>
                                        <option value="20" >BURUH TANI/PERKEBUNAN</option>
                                        <option value="21" >BURUH NELAYAN/PERIKANAN</option>
                                        <option value="22" >BURUH PETERNAKAN</option>
                                        <option value="23" >PEMBANTU RUMAH TANGGA</option>
                                        <option value="24" >TUKANG CUKUR</option>
                                        <option value="25" >TUKANG LISTRIK</option>
                                        <option value="26" >TUKANG BATU</option>
                                        <option value="27" >TUKANG KAYU</option>
                                        <option value="28" >TUKANG SOL SEPATU</option>
                                        <option value="29" >TUKANG LAS/PANDAI BESI</option>
                                        <option value="30" >TUKANG JAHIT</option>
                                        <option value="31" >TUKANG GIGI</option>
                                        <option value="32" >PENATA RIAS</option>
                                        <option value="33" >PENATA BUSANA</option>
                                        <option value="34" >PENATA RAMBUT</option>
                                        <option value="35" >MEKANIK</option>
                                        <option value="36" >SENIMAN</option>
                                        <option value="37" >TABIB</option>
                                        <option value="38" >PARAJI</option>
                                        <option value="39" >PERANCANG BUSANA</option>
                                        <option value="40" >PENTERJEMAH</option>
                                        <option value="41" >IMAM MASJID</option>
                                        <option value="42" >PENDETA</option>
                                        <option value="43" >PASTOR</option>
                                        <option value="44" >WARTAWAN</option>
                                        <option value="45" >USTADZ/MUBALIGH</option>
                                        <option value="46" >JURU MASAK</option>
                                        <option value="47" >PROMOTOR ACARA</option>
                                        <option value="48" >ANGGOTA DPR-RI</option>
                                        <option value="49" >ANGGOTA DPD</option>
                                        <option value="50" >ANGGOTA BPK</option>
                                        <option value="51" >PRESIDEN</option>
                                        <option value="52" >WAKIL PRESIDEN</option>
                                        <option value="53" >ANGGOTA MAHKAMAH KONSTITUSI</option>
                                        <option value="54" >ANGGOTA KABINET KEMENTERIAN</option>
                                        <option value="55" >DUTA BESAR</option>
                                        <option value="56" >GUBERNUR</option>
                                        <option value="57" >WAKIL GUBERNUR</option>
                                        <option value="58" >BUPATI</option>
                                        <option value="59" >WAKIL BUPATI</option>
                                        <option value="60" >WALIKOTA</option>
                                        <option value="61" >WAKIL WALIKOTA</option>
                                        <option value="62" >ANGGOTA DPRD PROVINSI</option>
                                        <option value="63" >ANGGOTA DPRD KABUPATEN/KOTA</option>
                                        <option value="64" >DOSEN</option>
                                        <option value="65" >GURU</option>
                                        <option value="66" >PILOT</option>
                                        <option value="67" >PENGACARA</option>
                                        <option value="68" >NOTARIS</option>
                                        <option value="69" >ARSITEK</option>
                                        <option value="70" >AKUNTAN</option>
                                        <option value="71" >KONSULTAN</option>
                                        <option value="72" >DOKTER</option>
                                        <option value="73" >BIDAN</option>
                                        <option value="74" >PERAWAT</option>
                                        <option value="75" >APOTEKER</option>
                                        <option value="76" >PSIKIATER/PSIKOLOG</option>
                                        <option value="77" >PENYIAR TELEVISI</option>
                                        <option value="78" >PENYIAR RADIO</option>
                                        <option value="79" >PELAUT</option>
                                        <option value="80" >PENELITI</option>
                                        <option value="81" >SOPIR</option>
                                        <option value="82" >PIALANG</option>
                                        <option value="83" >PARANORMAL</option>
                                        <option value="84" >PEDAGANG</option>
                                        <option value="85" >PERANGKAT DESA</option>
                                        <option value="86" >KEPALA DESA</option>
                                        <option value="87" >BIARAWATI</option>
                                        <option value="88" >WIRASWASTA</option>
                                        <option value="89" >LAINNYA</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>DATA KEWARGANEGARAAN :</strong></label>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="warganegara_id">Status Warga Negara</label>
                                    <select class="form-control form-control-sm required" name="warganegara_id">
                                        <option value="">Pilih Warga Negara</option>
                                        <option value="1" >WNI</option>
                                        <option value="2" >WNA</option>
                                        <option value="3" >DUA KEWARGANEGARAAN</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-sm-8'>
                                <div class='form-group'>
                                    <label for="dokumen_pasport">Nomor Paspor </label>
                                    <input id="dokumen_pasport" name="dokumen_pasport" class="form-control form-control-sm nomor_sk" maxlength="45" type="text" placeholder="Nomor Paspor" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="tanggal_akhir_paspor">Tgl Berakhir Paspor</label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm pull-right" id="tgl_2" name="tanggal_akhir_paspor" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-8'>
                                <div class='form-group'>
                                    <label for="dokumen_kitas">Nomor KITAS/KITAP </label>
                                    <input id="dokumen_kitas" name="dokumen_kitas" class="form-control form-control-sm number" maxlength="10" type="text" placeholder="Nomor KITAS/KITAP" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>DATA ORANG TUA :</strong></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="ayah_nik"> NIK Ayah </label>
                                            <input id="ayah_nik" name="ayah_nik" class="form-control form-control-sm nik" type="text" placeholder="Nomor NIK Ayah" value=""></input>
                                        </div>
                                    </div>
                                    <div class='col-sm-8'>
                                        <div class='form-group'>
                                            <label for="nama_ayah">Nama Ayah </label>
                                            <input id="nama_ayah" name="nama_ayah" class="form-control form-control-sm required nama" maxlength="100" type="text" placeholder="Nama Ayah" value=""></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4'>
                                <div class='form-group'>
                                    <label for="ibu_nik"> NIK Ibu </label>
                                    <input id="ibu_nik" name="ibu_nik" class="form-control form-control-sm nik" type="text" placeholder="Nomor NIK Ibu" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-8'>
                                <div class='form-group'>
                                    <label for="nama_ibu">Nama Ibu </label>
                                    <input id="nama_ibu" name="nama_ibu" class="form-control form-control-sm required nama" maxlength="100" type="text" placeholder="Nama Ibu" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>ALAMAT :</strong></label>
                                </div>
                            </div>
                            <div class='form-group col-2'>
                                <label>RW </label>
                                <select class="form-control form-control-sm required" name="rw">
                                    <option class="placeholder" value="">Pilih RW</option>
                                </select>
                            </div>
                            <div class='form-group col-sm-2'>
                                <label>RT </label>
                                <select id="id_cluster" class="form-control form-control-sm required" name="id_cluster">
                                    <option class="placeholder" value="">Pilih RT </option>
                                </select>
                            </div>
                            <div class='col-12'>
                                <div class='form-group'>
                                    <label for="alamat_sebelumnya">Alamat Sebelumnya </label>
                                    <input id="alamat_sebelumnya" name="alamat_sebelumnya" class="form-control form-control-sm" maxlength="200" type="text" placeholder="Alamat Sebelumnya" value=""></input>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class='form-group'>
                                    <label for="alamat_sekarang">Alamat Sekarang </label>
                                    <input id="alamat_sekarang" name="alamat_sekarang" class="form-control form-control-sm" maxlength="200" type="text" placeholder="Alamat Sekarang" value=""></input>
                                </div>
                            </div>
                            <div class='col-sm-12'>
                                <div class='form-group'>
                                    <label for="telepon"> Nomor Telepon </label>
                                    <input id="telepon" name="telepon" class="form-control form-control-sm" type="text" placeholder="Nomor Telepon" size="20" value=""></input>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class='form-group'>
                                    <label for="email"> Alamat Email </label>
                                    <input id="email" name="email" class="form-control form-control-sm email" maxlength="50" placeholder="Alamat Email" size="20" value=""></input>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>STATUS PERKAWINAN :</strong></label>
                                </div>
                            </div>
                            <div class='col-3'>
                                <div class='form-group'>
                                    <label for="status_kawin">Status Perkawinan</label>
                                    <select class="form-control form-control-sm required" name="status_kawin" onchange="disable_kawin_cerai($(this).find(':selected').val())">
                                        <option value="">Pilih Status Perkawinan</option>
                                        <option value="1" >BELUM KAWIN</option>
                                        <option value="2" >KAWIN</option>
                                        <option value="3" >CERAI HIDUP</option>
                                        <option value="4" >CERAI MATI</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-3'>
                                <div class='form-group'>
                                    <label for="akta_perkawinan">No. Akta Nikah</label>
                                    <input id="akta_perkawinan" name="akta_perkawinan" class="form-control form-control-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Perkawinan" value=""></input>
                                </div>
                            </div>
                            <div class='col-6'>
                                <div class='form-group'>
                                    <label for="tanggalperkawinan">Tanggal Perkawinan <code>(Wajib diisi apabila status KAWIN)</code></label>
                                    <div class="input-group input-group-sm date" id="datepick" data-target-input="nearest">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control input-sm pull-right" name="tanggalperceraian" type="text" value=""data-target="#datepick" data-toggle="datetimepicker">
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-6'>
                                <div class='form-group'>
                                    <label for="akta_perceraian">Akta Perceraian </label>
                                    <input id="akta_perceraian" name="akta_perceraian" class="form-control form-control-sm nomor_sk" maxlength="40" type="text" placeholder="Akta Perceraian" value=""></input>
                                </div>
                            </div>
                            <div class='col-6'>
                                <div class='form-group'>
                                    <label for="tanggalperceraian">Tanggal Perceraian <code>(Wajib diisi apabila status CERAI)</code></label>
                                    <div class="input-group input-group-sm date" id="datepick" data-target-input="nearest">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control input-sm pull-right" name="tanggalperceraian" type="text" value=""data-target="#datepick" data-toggle="datetimepicker">
                                    </div>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class="form-group subtitle_head">
                                    <label class="text-right"><strong>DATA KESEHATAN :</strong></label>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class="row">
                                    <div class='col-4'>
                                        <div class='form-group'>
                                            <label for="golongan_darah_id">Golongan Darah</label>
                                            <select class="form-control form-control-sm required" name="golongan_darah_id">
                                                <option value="">Pilih Golongan Darah</option>
                                                <option value="1" >A</option>
                                                <option value="2" >B</option>
                                                <option value="3" >AB</option>
                                                <option value="4" >O</option>
                                                <option value="5" >A+</option>
                                                <option value="6" >A-</option>
                                                <option value="7" >B+</option>
                                                <option value="8" >B-</option>
                                                <option value="9" >AB+</option>
                                                <option value="10" >AB-</option>
                                                <option value="11" >O+</option>
                                                <option value="12" >O-</option>
                                                <option value="13" >TIDAK TAHU</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class='col-4'>
                                        <div class='form-group'>
                                            <label for="cacat_id">Cacat</label>
                                            <select class="form-control form-control-sm" name="cacat_id" >
                                                <option value="">Pilih Jenis Cacat</option>
                                                <option value="1" >CACAT FISIK</option>
                                                <option value="2" >CACAT NETRA/BUTA</option>
                                                <option value="3" >CACAT RUNGU/WICARA</option>
                                                <option value="4" >CACAT MENTAL/JIWA</option>
                                                <option value="5" >CACAT FISIK DAN MENTAL</option>
                                                <option value="6" >CACAT LAINNYA</option>
                                                <option value="7" >TIDAK CACAT</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class='col-4'>
                                        <div class='form-group'>
                                            <label for="sakit_menahun_id">Sakit Menahun</label>
                                            <select class="form-control form-control-sm" name="sakit_menahun_id">
                                                <option value="">Pilih Sakit Menahun</option>
                                                <option value="1" >JANTUNG</option>
                                                <option value="2" >LEVER</option>
                                                <option value="3" >PARU-PARU</option>
                                                <option value="4" >KANKER</option>
                                                <option value="5" >STROKE</option>
                                                <option value="6" >DIABETES MELITUS</option>
                                                <option value="7" >GINJAL</option>
                                                <option value="8" >MALARIA</option>
                                                <option value="9" >LEPRA/KUSTA</option>
                                                <option value="10" >HIV/AIDS</option>
                                                <option value="11" >GILA/STRESS</option>
                                                <option value="12" >TBC</option>
                                                <option value="13" >ASTHMA</option>
                                                <option value="14" >TIDAK ADA/TIDAK SAKIT</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='form-group'>
                                    <label for="cara_kb_id">Akseptor KB</label>
                                    <select class="form-control form-control-sm" name="cara_kb_id" >
                                        <option value="">Pilih Cara KB Saat Ini</option>
                                        <option value="1" >PIL</option>
                                        <option value="2" >IUD</option>
                                        <option value="3" >SUNTIK</option>
                                        <option value="4" >KONDOM</option>
                                        <option value="5" >SUSUK KB</option>
                                        <option value="6" >STERILISASI WANITA</option>
                                        <option value="7" >STERILISASI PRIA</option>
                                        <option value="99" >LAINNYA</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='form-group'>
                                    <label for="hamil">Status Kehamilan </label>
                                    <select class="form-control form-control-sm" name="hamil">
                                        <option value="">Pilih Status Kehamilan</option>
                                        <option value="0" >Tidak Hamil</option>
                                        <option value="1"  >Hamil</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='form-group'>
                                    <label for="id_asuransi">Asuransi </label>
                                    <select class="form-control form-control-sm" name="id_asuransi" onchange="show_hide_asuransi($(this).find(':selected').val());">
                                        <option value="">Pilih Asuransi</option>
                                        <option value="1" >TIDAK/BELUM PUNYA</option>
                                        <option value="2" >BPJS PENERIMA BANTUAN IURAN</option>
                                        <option value="3" >BPJS NON PENERIMA BANTUAN IURAN</option>
                                        <option value="99" >ASURANSI LAINNYA</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-4'>
                                <div class='form-group'>
                                    <label id="label-no-asuransi" for="no_asuransi">No Asuransi </label>
                                    <input id="no_asuransi" name="no_asuransi" class="form-control form-control-sm" type="text" maxlength="50" placeholder="Nomor Asuransi" value=""></input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="text-align: right;">
                    
                        <button type="submit" class="btn btn-danger">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary" type="submit">
                            Simpan
                        </button>
                    </div>
                    <!-- /data identitas desa -->
            </div>
            <!-- /ubah data identitas desa -->
        </div>
        <!-- /col-md-9 -->
    
    </div>
    <!-- /row -->
</section>
@endsection