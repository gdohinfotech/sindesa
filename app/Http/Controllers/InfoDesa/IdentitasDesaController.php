<?php

namespace App\Http\Controllers\InfoDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdentitasDesaController extends Controller
{
    public function indexIndetitasDesa() {
        return view('admin-identitasdesa.index');
    }
}
