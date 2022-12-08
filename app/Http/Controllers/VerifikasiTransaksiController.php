<?php

namespace App\Http\Controllers;

use App\Models\UploadBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifikasiTransaksiController extends Controller
{
    public function verifikasiTransaksiView()
    {
        // $all_data = UploadBukti::all()->sortByDesc('id');
        $all_data = DB::table('upload_bukti_bayar')->orderBy('id', 'desc')->paginate(5);
        return view('pages.verifikasi-transaksi.verifikasiTransaksi',compact('all_data'));
    }

    public function changeStatus($id)
    {
        $get_status = UploadBukti::select('status')->where('id',$id)->first();


        if($get_status->status == "pending"){
            $status = "success";

        }else{
            $status = "pending";
        }
        UploadBukti::where('id',$id)->update(['status'=>$status]);

        return redirect()->back();

    }


}
