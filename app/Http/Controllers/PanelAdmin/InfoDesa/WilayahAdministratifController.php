<?php

namespace App\Http\Controllers\PanelAdmin\InfoDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WilayahAdministratifController extends Controller
{
    public function indexWilAdministratif() {
        return view('PanelAdmin.admin-wiladministratif.index');
    }
}
