<?php

namespace App\Http\Controllers;
use App\Models\UploadBukti;
use Illuminate\Http\Request;

class UploadBuktiController extends Controller
{
    // Method show all data
    public  function index(){
        return view('pages.upload-transaksi.index');
    }

    // Method showing form upload transaksi
    public function create(){
        return view('pages.upload-transaksi.create');
    }

    // Method create new upload transaksi
    public function store(Request $request){
        //
        if($request->file('gambar')){
            $file_name = $request->file('gambar')->getClientOriginalName();
            $file = $request->file('gambar')->storeAs('foto-product', $file_name);
        }

        UploadBukti::create([
            'nop' => $request->nop,
            'nama_subjek' => $request->nama_subjek,
            'nama_pengirim' => $request->nama_pengirim,
            'no_hp' => $request->no_hp,
            'gambar' => $file,
        ]);


        return \redirect()->route('upload-transaksi');
    }


}
