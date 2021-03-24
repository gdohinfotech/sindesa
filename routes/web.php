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

Route::get('/', 'PanelAdmin\PanelAdminController@tampilDasbor');

Route::get('identitas-desa','PanelAdmin\InfoDesa\IdentitasDesaController@indexIndetitasDesa')->name('admin.identitas-desa.index');
