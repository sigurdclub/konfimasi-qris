<?php

namespace App\Http\Controllers;

use App\Models\DataSubjekPajak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataPribadiController extends Controller
{
    // ====== Data Pribadi View ======== //
    public function dataPribadiView() {

        
        
        $nop        = Auth::user()->name;
        
        $userData   = DataSubjekPajak::where('SUBJEK_PAJAK_ID',$nop)->get();

        return view('pages.data-pribadi.dataPribadi',compact('userData'));
    }

    // Data Pribadi Admin
    public function dataPribadiAdmin($id) {

        $access     = Auth::user()->role;
        $singleData = DB::table('dat_subjek_pajak')->where('id', $id)->first();

        return view('pages.data-pribadi.admin.dataPribadi',compact('singleData','access'));


    }

    
    // Edit Number
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

    // Update All Data
    public function updateDataPribadi(Request $request) {

        $subjek_pajak = DataSubjekPajak::where('id',$request->id)->
        update([
            'SUBJEK_PAJAK_ID'   => $request->SUBJEK_PAJAK_ID,
            'NM_WP'             => $request->NM_WP,
            'JALAN_WP'          => $request->JALAN_WP,
            'KELURAHAN_WP'      => $request->KELURAHAN_WP,
            'KOTA_WP'           => $request->KOTA_WP,
            'TELP_WP'           => $request->TELP_WP,
            

        ]);

        return redirect()->route('data-public');
        
    }




}
