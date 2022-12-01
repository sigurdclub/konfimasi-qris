<?php

namespace App\Http\Controllers;
use App\Models\UploadBukti;
use Illuminate\Http\Request;


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
        $foto_bukti_bayar   = $request->foto_bukti_bayar; 

        
        
        return view('pages.upload-transaksi.modal.preview',compact(
            'nop',
            'no_hp',
            'nama_subjek',
            'nama_pengirim',
            'foto_bukti_bayar'
        
        ));

    }


    // Method create new upload transaksi
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nop"           => "required|string",
            "nama_subjek"   => "required|string",
            "nama_pengirim" => "required|string",
            "no_hp"         => "required|string",
            "foto_bukti_bayar" => "required|image|mimes:jpeg,png,jpg|max:2048",

        ]);
        if($request->file('foto_bukti_bayar')){
            $file_name = $request->file('foto_bukti_bayar')->hashName();
            $validate['foto_bukti_bayar'] = $request->file('foto_bukti_bayar')->storeAs('foto-bukti', $file_name);
        }

        UploadBukti::create($validate);
        return redirect('/history-transaksi');
    }

    //Method view form edit data
    public function edit($id)
    {
        $model = UploadBukti::find($id);
        return view('pages.upload-transaksi.edit', compact('model'));
    }

    public function update(Request $request)
    {
        # code...
    }


}
