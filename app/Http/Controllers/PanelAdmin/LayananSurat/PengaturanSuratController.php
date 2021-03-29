<?php

namespace App\Http\Controllers\PanelAdmin\LayananSurat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaturanSuratController extends Controller
{
    public function indexPengaturanSurat() {
        return view('PanelAdmin.admin-pengaturansurat.index');
    }
}
