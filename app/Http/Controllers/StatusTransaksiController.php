<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UploadBukti;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class StatusTransaksiController extends Controller
{
    public function statusTransaksiView()
    {

        $nop = Auth::user()->name;
        $data = UploadBukti::where('nop',$nop)
                                ->filter(request(['search']))
                                ->paginate(5);

        return view('pages.status-transaksi.statusTransaksi', compact('data'));

    }


}
