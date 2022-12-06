<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UploadBukti;
use Illuminate\Http\Request;

class StatusTransaksiController extends Controller
{
    public function statusTransaksiView()
    {
        // $data = UploadBukti::all();
        $nop = Auth::user()->name;
        $data = UploadBukti::where('nop',$nop)
                            ->filter(request(['search']))
                            ->paginate(10);
        return view('pages.status-transaksi.statusTransaksi', compact('data'));
    }


}
