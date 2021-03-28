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
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.wil-administratif.index-RW') }}">
                        Daftar Penyelenggara Pemerintahan Desa
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Tambah Data Pemerintahan Desa
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
                        <button onclick="window.location='{{ route('admin.wil-administratif.index-RW') }}'" type="submit" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-arrow-left"></i>
                            Kembali ke Daftar RW
                        </button>
                    </div>
                </div>

                <!-- kategori data pemerintahan desa -->
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                Data Pemerintahan Desa
                            </label>    
                        </div>
                        <div class="col-md-4 btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn bg-olive active">
                                <input type="radio" name="options" id="option_b1" autocomplete="off" checked>
                                Database Penduduk Desa
                            </label>
                            <label class="btn bg-olive">
                                <input type="radio" name="options" id="option_b2" autocomplete="off">
                                Tidak Terdata
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="col-form-label">
                                NIK / Nama Penduduk
                            </label>
                        </div>
                        <div class="col-md-4 com-sm-12">
                            <select class="form-control">
                                <option>
                                    63031554******** / JASIMAH
                                </option>
                                <option>
                                    63030543******** / NAFI'AH
                                </option>
                                <option>
                                    63031528******** / M. MUHIB BUDIN 
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /kategori data pemerintahan desa -->

            </div>
        </div>
    <!-- /col-md-12 -->
    </div>
    <!-- /row -->

    <!-- start row -->
    <div class="row">
        <!-- start col-md-3 -->
        <div class="col-md-3">
            <!-- ubah gambar -->
            <div class="card card-primary card-outline">
                <!-- pas foto perangkat desa -->
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/avatar.png') }}" alt="gambar lambang desa">
                        <br />
                        <h3 class="profile-username text-center">
                            Pas Foto
                        </h3>
                        <br />
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-0">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat">
                                    Cari file
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- pas foto perangkat desa -->
            </div>
        </div>
        <!-- /col-md-3 -->

        <!-- start col-md-9 -->
        <div class="col-md-9">
            <!-- tambah data pemerintahan desa -->
            <div class="card card-primary card-outline">
                <!-- data pemerintahan desa -->
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nama
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nomor Induk Kependudukan (NIK)
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nomor Induk Kepegawaian (NIK)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nomor Induk Perangkat Desa (NIPD)
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nomor Induk Perangkat Desa (NIPD)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nomor Induk Pegawai (NIP)
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nomor Induk Pegawai (NIP)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Tempat Lahir
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Tempat Lahir">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Tanggal Lahir
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        <i class="fas fa-calendar"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control rounded-0">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Jenis Kelamin
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih --
                                </option>
                                <option>
                                    Laki-Laki
                                </option>
                                <option>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Pendidikan
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih --
                                </option>
                                <option>
                                    Laki-Laki
                                </option>
                                <option>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Agama
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <select class="form-control">
                                <option>
                                    -- Silahkan Pilih --
                                </option>
                                <option>
                                    Islam
                                </option>
                                <option>
                                    Kristen
                                </option>
                                <option>
                                    Katholik
                                </option>
                                <option>
                                    Hindu
                                </option>
                                <option>
                                    Budha
                                </option>
                                <option>
                                    Khonghucu
                                </option>
                                <option>
                                    Kepercayaan terhadap Tuhan YME / Lainnya
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Pangkat / Golongan
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Pangkat / Golongan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nomor SK Pengangkatan
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nomor SK Pengangkatan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Tanggal SK Pengangkatan
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        <i class="fas fa-calendar"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control rounded-0">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Nomor SK Pemberhentian
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Nomor SK Pemberhentian">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Tanggal SK Pemberhentian
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        <i class="fas fa-calendar"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control rounded-0">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Tanggal Mulai Terhitung (TMT)
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat">
                                        <i class="fas fa-calendar"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control rounded-0">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Jabatan
                            </label>    
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control rounded-0" placeholder="Jabatan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Status Pegawai Desa
                            </label>    
                        </div>
                        <div class="col-md-5 btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn bg-olive active">
                                <input type="radio" name="options" id="option_b1" autocomplete="off" checked>
                                Aktif
                            </label>
                            <label class="btn bg-olive">
                                <input type="radio" name="options" id="option_b2" autocomplete="off">
                                Tidak Aktif
                            </label>
                        </div>
                    </div>

                </div>

                <div class="card-footer" style="text-align: right;">
                    <button type="submit" class="btn btn-danger btn-social"><i class="fas fa-eraser"></i>
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-social" type="submit"><i class="fas fa-check"></i>
                        Simpan
                    </button>
                </div>

                <!-- /data pemerintahan desa -->
            </div>
            <!-- tambah data pemerintahan desa -->
        </div>
        <!-- /col-md-9 -->
    </div>
    <!-- /row -->
</section>
@endsection