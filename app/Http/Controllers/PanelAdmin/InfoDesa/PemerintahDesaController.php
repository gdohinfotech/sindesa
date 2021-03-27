<?php

namespace App\Http\Controllers\PanelAdmin\InfoDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemerintahDesaController extends Controller
{
    public function indexPemerintahDesa() {
        return view('PanelAdmin.admin-pemerintahdesa.index');
    }

    public function addPemerintahDesa() {
        return view('PanelAdmin.admin-pemerintahdesa.add');
    }
}
