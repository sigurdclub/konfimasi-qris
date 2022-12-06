<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPublicController extends Controller
{
    public function dataPublicView()
    {
        
        return view('pages.data-public.dataPublic');
    }
}
