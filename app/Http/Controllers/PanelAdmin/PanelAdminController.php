<?php

namespace App\Http\Controllers\PanelAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelAdminController extends Controller
{
    public function tampilDasbor()
    {
        return view('admin-dasbor.index');
    }
}
