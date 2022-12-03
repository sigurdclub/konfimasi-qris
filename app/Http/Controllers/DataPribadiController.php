<?php

namespace App\Http\Controllers;

use App\Models\DataSubjekPajak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPribadiController extends Controller
{
    public function dataPribadiView() {

        
        $nop = Auth::user()->name;
        $userData = DataSubjekPajak::where('SUBJEK_PAJAK_ID',$nop)->get();

        return view('pages.data-pribadi.dataPribadi',compact('userData'));
    }
    public function editNumber(Request $request) {

        // $nop = Auth::user()->name;
        // $no_telp = $request->TELP_WP;
        // $userData = DataSubjekPajak::where('SUBJEK_PAJAK_ID', $nop)->first(['TELP_WP','id']);
        // $userData = $no_telp;
        // // $data_user = DataSubjekPajak::find($nop);
        // // dd($userData);
        // $userData->save();
        // return redirect('status-transaksi');
        
        
    }


}
