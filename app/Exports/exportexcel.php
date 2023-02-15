<?php

namespace App\Exports;

use App\Models\UploadBukti;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportexcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return UploadBukti::all();
    }
}
