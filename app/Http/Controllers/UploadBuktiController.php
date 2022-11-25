<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadBuktiController extends Controller
{
    // Method show all data
    public  function index(){
        //
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




        return \redirect()->route('upload-transaksi');
    }
}
