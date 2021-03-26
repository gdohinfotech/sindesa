<?php

namespace App\Http\Controllers\PanelAdmin\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendudukController extends Controller
{
    public function index()
    {
        return view('PanelAdmin.admin-penduduk.index');
    }

    public function addpenduduk()
    {
        return view('PanelAdmin.admin-penduduk.add');
    }

    public function readpenduduk()
    {
        return view('PanelAdmin.admin-penduduk.read');
    }
}
