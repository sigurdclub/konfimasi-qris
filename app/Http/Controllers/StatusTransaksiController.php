<?php

namespace App\Http\Controllers;

use App\Models\UploadBukti;
use Illuminate\Http\Request;

class StatusTransaksiController extends Controller
{
    public function statusTransaksiView()
    {
        $data = UploadBukti::all();

        
        return view('pages.status-transaksi.statusTransaksi', compact('data'));
    }


}
