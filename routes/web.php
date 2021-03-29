<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PanelAdmin\DasborController@tampilDasbor')->name('dasbor');

// Routes for Info Desa
Route::get('identitas-desa','PanelAdmin\InfoDesa\IdentitasDesaController@indexIndetitasDesa')->name('admin.identitas-desa.index');
Route::get('identitas-desa/edit','PanelAdmin\InfoDesa\IdentitasDesaController@editIndetitasDesa')->name('admin.identitas-desa.edit');

// Routes for Wilayah Administratif
Route::get('wilayah-administratif/rw','PanelAdmin\InfoDesa\WilayahAdministratifController@indexRW')->name('admin.wil-administratif.index-RW');
Route::get('wilayah-administratif/add-rw','PanelAdmin\InfoDesa\WilayahAdministratifController@addRW')->name('admin.wil-administratif.add-RW');

Route::get('wilayah-administratif/rt','PanelAdmin\InfoDesa\WilayahAdministratifController@indexRT')->name('admin.wil-administratif.index-RT');
Route::get('wilayah-administratif/add-rt','PanelAdmin\InfoDesa\WilayahAdministratifController@addRT')->name('admin.wil-administratif.add-RT');

// Routes for Pemerintahan Desa
Route::get('pemerintahan-desa','PanelAdmin\InfoDesa\PemerintahDesaController@indexPemerintahDesa')->name('admin.pemerintahan-desa.index');
Route::get('pemerintahan-desa/add','PanelAdmin\InfoDesa\PemerintahDesaController@addPemerintahDesa')->name('admin.pemerintahan-desa.add');

// Routes for Sarana dan Prasaranan Desa
Route::get('sarana-prasarana-desa','PanelAdmin\InfoDesa\SaranaPrasaranaController@indexSarPra')->name('admin.sarana-prasarana-desa.index');
Route::get('sarana-prasarana-desa/add','PanelAdmin\InfoDesa\SaranaPrasaranaController@addSarPra')->name('admin.sarana-prasarana-desa.add');

// Routes for Kependudukan
Route::get('/penduduk','PanelAdmin\Kependudukan\PendudukController@index')->name('admin.kependudukan.index');
Route::get('/penduduk/add','PanelAdmin\Kependudukan\PendudukController@addpenduduk')->name('admin.kependudukan.add');
Route::get('/penduduk/edit','PanelAdmin\Kependudukan\PendudukController@editpenduduk')->name('admin.kependudukan.edit');
Route::get('/penduduk/read','PanelAdmin\Kependudukan\PendudukController@readpenduduk')->name('admin.kependudukan.read');
Route::get('/penduduk/document','PanelAdmin\Kependudukan\PendudukController@docpenduduk')->name('admin.kependudukan.doc');

// Routes for Keluarga
Route::get('/keluarga','PanelAdmin\Kependudukan\KeluargaController@index')->name('admin.keluarga.index');
Route::get('/keluarga/kartukeluarga','PanelAdmin\Kependudukan\KeluargaController@kartukeluarga')->name('admin.keluarga.kartukeluarga');
Route::get('/keluarga/anggota','PanelAdmin\Kependudukan\KeluargaController@anggotapenduduk')->name('admin.keluarga.anggota');
Route::get('/keluarga/add','PanelAdmin\Kependudukan\KeluargaController@addkeluarga')->name('admin.keluarga.add');
Route::get('/keluarga/addanggota','PanelAdmin\Kependudukan\KeluargaController@addanggota')->name('admin.keluarga.addanggota');

// Routes for Rumah Tangga
Route::get('/rumahtangga','PanelAdmin\Kependudukan\RumahTanggaController@index')->name('admin.rumahtangga.index');
Route::get('/rumahtangga/anggota','PanelAdmin\Kependudukan\RumahTanggaController@anggotapenduduk')->name('admin.rumahtangga.anggota');
Route::get('/rumahtangga/addanggota','PanelAdmin\Kependudukan\RumahTanggaController@addanggota')->name('admin.rumahtangga.addanggota');
Route::get('/rumahtangga/karturumahtangga','PanelAdmin\Kependudukan\RumahTanggaController@karturumahtangga')->name('admin.rumahtangga.karturumahtangga');

//Rouets for Pengaturan Surat
Route::get('/layanan-surat/pengaturan-surat','PanelAdmin\LayananSurat\PengaturanSuratController@indexPengaturanSurat')->name('admin.pengaturan-surat.index');
