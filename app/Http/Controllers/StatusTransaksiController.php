<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UploadBukti;
use Illuminate\Support\Facades\Storage;

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
        $access = Auth::user()->role;

        return view('pages.status-transaksi.statusTransaksi', compact('data','access'));

    }

    public function cancelTransaksi($id)
    {
        $data = UploadBukti::find($id);
        Storage::delete(['foto-bukti', $data->foto_bukti_bayar]);
        $data->delete($id);
        return redirect('status-transaksi');

    }

}
