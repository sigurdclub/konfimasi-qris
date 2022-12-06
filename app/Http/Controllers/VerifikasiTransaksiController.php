<?php

namespace App\Http\Controllers;

use App\Models\UploadBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifikasiTransaksiController extends Controller
{
    public function verifikasiTransaksiView()
    {
        $all_data = UploadBukti::all();

        
        return view('pages.verifikasi-transaksi.verifikasiTransaksi',compact('all_data'));
    }

    
}
