<?php

namespace App\Http\Controllers;

use App\Models\DataSubjekPajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $nop = Auth::user()->name;
        $userData = DataSubjekPajak::where('SUBJEK_PAJAK_ID',$nop)->get();
        return view('pages.dashboard.dashboard',compact('userData'));
    }
}
