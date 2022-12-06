<?php

namespace App\Http\Controllers;
use App\Models\UploadBukti;
use App\Models\DataSubjekPajak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;


use Illuminate\Http\Request;

class HistoryTransaksiController extends Controller
{
    //
    public function historyTransaksi()
    {


        if(Auth::user()->role == 'admin'){

            $histori = UploadBukti::first()->filter(request(['search']))->orderBy('id', 'desc')->paginate(5);

            // if(request('search')){
            //     $histori -> where('nop', 'like', '%' . $search . '%')
            //             -> orWhere('nama_pengirim', 'like', '%' . $search . '%')
            //             -> orWhere('nama_subjek', 'like', '%' . $search . '%')
            //             -> orWhere('tanggal', 'like', '%' . $search . '%');
            //     }
            // }

            return view('pages.history-transaksi.index', compact('histori'));

        }else{

            $name = Auth::user()->name;
            $histori = UploadBukti::where('nop',$name)
                                ->filter(request(['search']))
                                ->paginate(10);

            return view('pages.history-transaksi.index', compact('histori'));
        }
    }
}
