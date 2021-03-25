<?php

namespace App\Http\Controllers\PanelAdmin\InfoDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdentitasDesaController extends Controller
{
    public function indexIndetitasDesa() {
        return view('PanelAdmin.admin-identitasdesa.index');
    }

    public function editIndetitasDesa() {
        return view('PanelAdmin.admin-identitasdesa.edit');
    }
}
