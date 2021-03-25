@extends('admin-layout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Data Penduduk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dasbor</a></li>
                <li class="breadcrumb-item active">Data Penduduk</li>
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
                        <button type="button" class="btn btn-primary btn-sm btn-social btn-block"><i class="fa fa-plus"></i>  Penduduk Domisili</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm btn-social btn-block" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Pilih Aksi Lainnya</button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                <table id="penduduk" class="table table-bordered table-hover w-100 d-block d-md-table text-center nowrap">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>AKSI</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>NO. KK</th>
                            <th>NAMA IBU</th>
                            <th>NO. RUMAH TANGGA</th>
                            <th>ALAMAT</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>PENDIDIKAN DALAM KK</th>
                            <th>UMUR</th>
                            <th>PEKERJAAN</th>
                            <th>KAWIN</th>
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
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs btn-social" data-toggle="dropdown"><i class="fas fa-caret-square-down"></i>Aksi</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i>  Cetak</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>  Unduh</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-search"></i>  Pencarian Spesifik</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Log Penduduk</a>
                                </div>
                            </div>
                            </td>
                            <td>6372022311920003</td>
                            <td>RIZKYANOOR WIDIANTORO</td>
                            <td>6372022311920003</td>
                            <td>NOORCHALIDAH</td>
                            <td>6372022311920003</td>
                            <td>LANDASAN ULIN</td>
                            <td>002</td> 
                            <td>003</td> 
                            <td>STRATA/I</td> 
                            <td>28</td>                             
                            <td>WIRASWASTA</td>                                                         
                            <td>KAWIN</td>                                                         
                            <td>23 NOVEMBER 2020</td>                                                         
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection