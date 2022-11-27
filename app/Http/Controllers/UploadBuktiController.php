<?php

namespace App\Http\Controllers;

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

    }
}
