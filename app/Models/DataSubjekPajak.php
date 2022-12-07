<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSubjekPajak extends Model
{
    // use HasFactory;
    protected $table        = 'dat_subjek_pajak';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id',
        'SUBJEK_PAJAK_ID',
        'NM_WP',
        'JALAN_WP',
        'BLOK_KAV_NO_WP',
        'RW_WP',
        'RT_WP',
        'KELURAHAN_WP',
        'KOTA_WP',
        'KD_POS_WP',
        'TELP_WP',
        'NPWP',
        'STATUS_PEKERJAAN_WP'
    ];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){

            return $query -> where('NM_WP', 'like', '%' . $search . '%')
                          -> orWhere('SUBJEK_PAJAK_ID', 'like', '%' . $search . '%');
        });

    }
}
