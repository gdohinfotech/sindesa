<?php

namespace App\Http\Controllers\PanelAdmin\InfoDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaranaPrasaranaController extends Controller
{
    public function indexSarPra(){
        return view('PanelAdmin.admin-sarpra.index');
    }
}
