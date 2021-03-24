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
Route::get('/identitas-desa','InfoDesa\IdentitasDesaController@indexIndetitasDesa')->name('identitas.desa');

// Routes for Kependudukan
Route::get('/penduduk','PanelAdmin\PendudukController@index')->name('data.penduduk');
