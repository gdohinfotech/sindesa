<?php

namespace App\Http\Controllers\PanelAdmin\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeluargaController extends Controller
{
    public function index()
    {
        return view('PanelAdmin.admin-keluarga.index');
    }

    public function kartukeluarga()
    {
        return view('PanelAdmin.admin-keluarga.kartukeluarga');
    }

    public function anggotapenduduk()
    {
        return view('PanelAdmin.admin-keluarga.anggota');
    }

    public function addkeluarga()
    {
        return view('PanelAdmin.admin-keluarga.add');
    }

    public function addanggota()
    {
        return view('PanelAdmin.admin-keluarga.addanggota');
    }
}
