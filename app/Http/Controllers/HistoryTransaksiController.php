<?php

namespace App\Http\Controllers;
use App\Models\UploadBukti;
use App\Models\DataSubjekPajak;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HistoryTransaksiController extends Controller
{
    //
    public function historyTransaksi()
    {

        // $data = UploadBukti::all();
        $nop = Auth::user()->name;
        $histori = UploadBukti::where('nop',$nop)
                                ->filter(request(['search']))
                                ->paginate(10);

        return view('pages.history-transaksi.index', compact('histori'));
    }
}
