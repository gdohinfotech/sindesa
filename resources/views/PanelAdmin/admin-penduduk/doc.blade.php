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
        <!-- start col-md-9 -->
        <div class="col-sm-12">
            <!-- ubah data identitas desa -->
            <div class="card card-primary card-outline">
                    <div class="card-header">
                        <a href="{{ route('admin.kependudukan.add') }}" type="button" class="btn btn-info btn-sm btn-social"><i class="fa fa-plus"></i>Tambah Dokumen </a>
                        <a href="{{ route('admin.kependudukan.index') }}" type="button" class="btn btn-primary btn-sm btn-social"><i class="fas fa-arrow-left"></i>Kembali ke Data Penduduk</a>
                    </div>
                    <!-- data identitas desa -->
                    <div class="card-body">
                        <div class="table-responsive">
							<table class="table table-bordered table-striped table-hover">
								<tbody>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;" >Nama Penduduk</td><td nowrap > : RIZKYANOOR WIDIANTORO</td>
									</tr>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >NIK</td><td nowrap > :  6372022311920003</td>
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
								<div class="">
									<form id="mainform" name="mainform" action="" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-hover ">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th><input type="checkbox" id="checkall"></th>
																<th>No</th>
																<th >Aksi</th>
																<th>Nama Dokumen</th>
																<th>Jenis Dokumen</th>
																<th>Tanggal Upload</th>
															</tr>
														</thead>
													</table>
												</div>
											</div>
										</div>
									</form>
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