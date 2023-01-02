<?php

namespace App\Http\Controllers;
use App\Models\UploadBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class UploadBuktiController extends Controller
{
    // Method show all data
    // public  function index(){
    //     return view('pages.upload-transaksi.index');
    // }

    // Method showing form upload transaksi
    public function create()
    {

        return view('pages.upload-transaksi.create');
    }


    // preview transaksi
    public function previewTransaksi(Request $request){

        $nop                = $request->nop;
        $no_hp              = $request->no_hp;
        $nama_subjek        = $request->nama_subjek;
        $nama_pengirim      = $request->nama_pengirim;
        $nominal            = $request->nominal;
        $foto_bukti_bayar   = $request->foto_bukti_bayar;
        

        
        return view('pages.upload-transaksi.modal.preview',compact(
            'nop',
            'no_hp',
            'nama_subjek',
            'nama_pengirim',
            'nominal',
            'foto_bukti_bayar'

        ));
    }



    // Method create new upload transaksi
    public function store(Request $request)
    {

        $nominal = str_replace( ',', '', $request->nominal );
        $request->nominal = $nominal;
        $validate = $request->validate([
            "nop"               => "required|string",
            "nama_subjek"       => "required|string",
            "nama_pengirim"     => "required|string",
            "no_hp"             => "required|string",
            "nominal"           => "required",
            "foto_bukti_bayar"  => "required|image|mimes:jpeg,png,jpg|max:2048",
            
        ],
        
    );
        $validate['nominal'] = $request->nominal;
    
        if($request->file('foto_bukti_bayar')){
            $file_name = $request->file('foto_bukti_bayar')->hashName();
            $validate['foto_bukti_bayar'] = $request->file('foto_bukti_bayar')->storeAs('foto-bukti', $file_name);
        }
        

        UploadBukti::create($validate);
        return redirect('/status-transaksi');
    }


}
