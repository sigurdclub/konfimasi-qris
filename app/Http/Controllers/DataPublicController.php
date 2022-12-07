<?php

namespace App\Http\Controllers;

use App\Models\DataSubjekPajak;
use Illuminate\Http\Request;

class DataPublicController extends Controller
{
    public function dataPublicView()
    {
        
        // $data_public = DataSubjekPajak::all()->paginate(15);
        $data_public = DataSubjekPajak::paginate(15);
        return view('pages.data-public.dataPublic',compact('data_public'));
    }
}
