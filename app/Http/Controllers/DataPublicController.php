<?php

namespace App\Http\Controllers;

use App\Models\DataSubjekPajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPublicController extends Controller
{

    // ==== Data Public ==== //
    public function dataPublicView()
    {

        // $data_public = DataSubjekPajak::all()->paginate(15);
        $data_public = DataSubjekPajak::first()->filter(request(['search']))->orderBy('id', 'desc')->paginate(15);;
        return view('pages.data-public.dataPublic',compact('data_public'));
    }


    // add subjek pajak view


    public function addSubjekPajak(){

        return view('pages.input-data.inputData');
    }

    public function storeDataPublic(Request $request)
    {
        $SUBJEK_PAJAK_ID =   $request->SUBJEK_PAJAK_ID;
        $NM_WP           =   $request->NM_WP;
        $JALAN_WP        =   $request->JALAN_WP;
        $BLOK_KAV_NO_WP  =   $request->BLOK_KAV_NO_WP;
        $RW_WP           =   $request->RW_WP;
        $RT_WP           =   $request->RT_WP;
        $KELURAHAN_WP    =   $request->KELURAHAN_WP;
        $KOTA_WP         =   $request->KOTA_WP;
        $KD_POS_WP       =   $request->KD_POS_WP;
        $TELP_WP         =   $request->TELP_WP;
        $NPWP            =   $request->NPWP;
        $STATUS_PEKERJAAN_WP  = $request->STATUS_PEKERJAAN_WP;


        DataSubjekPajak::create([
            'SUBJEK_PAJAK_ID'       => $SUBJEK_PAJAK_ID,
            'NM_WP'                 => $NM_WP,
            'JALAN_WP'              => $JALAN_WP,
            'BLOK_KAV_NO_WP'        => $BLOK_KAV_NO_WP,
            'RW_WP'                 => $RW_WP,
            'RT_WP'                 => $RT_WP,
            'KELURAHAN_WP'          => $KELURAHAN_WP,
            'KOTA_WP'               => $KOTA_WP,
            'KD_POS_WP'             => $KD_POS_WP,
            'TELP_WP'               => $TELP_WP,
            'NPWP'                  => $NPWP,
            'STATUS_PEKERJAAN_WP'   => $STATUS_PEKERJAAN_WP,
        ]);
        return redirect('/data-public');
    }


    public function deleteDataPribadi($id)
    {

        $data = DB::table('dat_subjek_pajak')->where('id',$id);
        $data->delete();

        return redirect('/data-public');

    }
}
