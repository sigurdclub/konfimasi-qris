<?php

namespace App\Http\Controllers;

use App\Exports\exportexcel;
use App\Models\UploadBukti;
use App\Models\DataSubjekPajak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HistoryTransaksiController extends Controller
{
    //
    public function historyTransaksi()
    {


        // if(Auth::user()->role == 'admin'){


            if(request('tgl_awal') AND request('tgl_akhir')){
                $tgl_awal = request('tgl_awal');
                $tgl_akhir = request('tgl_akhir');

                $histori = UploadBukti::first()->when(function($query)use($tgl_awal,$tgl_akhir){
                    $query->whereBetween('tanggal',[$tgl_awal, $tgl_akhir]);
                })->orderBy('id', 'desc')->paginate(5);


            }else{
                $histori = UploadBukti::first()
                                        ->filter(request(['search']))
                                        ->orderBy('id', 'desc')
                                        ->paginate(5);
            }



            return view('pages.history-transaksi.index', compact('histori'));

        // }else{

        //     $name = Auth::user()->name;
        //     $histori = UploadBukti::where('nop',$name)
        //                         ->filter(request(['search']))
        //                         ->paginate(5);

        //     return view('pages.history-transaksi.index', compact('histori'));
        // }
    }


    public function exportexcel(){
        return Excel::download(new exportexcel, 'buktifisik.xlsx');
    }
}
