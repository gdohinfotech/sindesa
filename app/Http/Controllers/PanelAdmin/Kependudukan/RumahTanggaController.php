<?php

namespace App\Http\Controllers\PanelAdmin\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RumahTanggaController extends Controller
{
    public function index()
    {
        return view('PanelAdmin.admin-rumahtangga.index');
    }

    public function anggotapenduduk()
    {
        return view('PanelAdmin.admin-rumahtangga.anggota');
    }

    public function addanggota()
    {
        return view('PanelAdmin.admin-rumahtangga.addanggota');
    }

    public function karturumahtangga()
    {
        return view('PanelAdmin.admin-rumahtangga.karturumahtangga');
    }
}
