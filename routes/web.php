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
Route::get('wilayah-administratif','PanelAdmin\InfoDesa\WilayahAdministratifController@indexWilAdministratif')->name('admin.wil-administratif.index-RW');
Route::get('wilayah-administratif/rt','PanelAdmin\InfoDesa\WilayahAdministratifController@indexRT')->name('admin.wil-administratif.index-RT');

// Routes for Kependudukan
Route::get('/penduduk','PanelAdmin\Kependudukan\PendudukController@index')->name('admin.kependudukan.index');
Route::get('/add','PanelAdmin\Kependudukan\PendudukController@addpenduduk')->name('admin.kependudukan.add');
Route::get('/edit','PanelAdmin\Kependudukan\PendudukController@editpenduduk')->name('admin.kependudukan.edit');
Route::get('/read','PanelAdmin\Kependudukan\PendudukController@readpenduduk')->name('admin.kependudukan.read');
Route::get('/document','PanelAdmin\Kependudukan\PendudukController@docpenduduk')->name('admin.kependudukan.doc');
Route::get('/anggota','PanelAdmin\Kependudukan\PendudukController@anggotapenduduk')->name('admin.kependudukan.anggota');



