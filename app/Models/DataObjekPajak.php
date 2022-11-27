<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObjekPajak extends Model
{
    // use HasFactory;
    protected $table        = 'dat_objek_pajak';
    protected $fillable     = [
        'KD_PROPINSI',
        'KD_DATI2',
        'KD_KECAMATAN',
        'KD_KELURAHAN',
        'KD_BLOK',
        'NO_URUT',
        'KD_JNS_OP',
        'SUBJEK_PAJAK_ID',
        'NO_FORMULIR_SPOP',
        'NO_PERSIL',
        'JALAN_OP',
        'BLOK_KAV_NO_OP',
        'RW_OP',
        'RT_OP',
        'KD_STATUS_CABANG',
        'KD_STATUS_WP',
        'TOTAL_LUAS_BUMI',
        'TOTAL_LUAS_BNG',
        'NJOP_BUMI',
        'NJOP_BNG',
        'STATUS_PETA_OP',
        'JNS_TRANSAKSI_OP',
        'TGL_PENDATAAN_OP',
        'NIP_PEMERIKSA_OP',
        'TGL_PEREKAMAN_OP',
        'NIP_PEREKAM_OP'
    ];
}
