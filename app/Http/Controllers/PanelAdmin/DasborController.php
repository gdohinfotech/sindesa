<?php

namespace App\Http\Controllers\PanelAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasborController extends Controller
{
    public function tampilDasbor()
    {
        return view('admin-dasbor.index');
    }
}
