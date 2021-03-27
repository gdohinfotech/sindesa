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

// Routes for Kependudukan
Route::get('/penduduk','PanelAdmin\Kependudukan\PendudukController@index')->name('admin.kependudukan.index');
Route::get('/add','PanelAdmin\Kependudukan\PendudukController@addpenduduk')->name('admin.kependudukan.add');
Route::get('/read','PanelAdmin\Kependudukan\PendudukController@readpenduduk')->name('admin.kependudukan.read');



