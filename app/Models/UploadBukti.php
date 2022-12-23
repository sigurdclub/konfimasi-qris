<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadBukti extends Model
{
    // use HasFactory;
    protected $table        = 'upload_bukti_bayar';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id',
        'nop',
        'nama_subjek',
        'nama_pengirim',
        'no_hp',
        'nominal',
        'foto_bukti_bayar',
        'tanggal',
        'status',
        'created_at',
        'updated_at'
    ];

    public function scopeFilter($query, array $filters)
    {


        $query->when($filters['search'] ?? false, function($query, $search){

            return $query -> where('nop', 'like', '%' . $search . '%')
                          -> orWhere('nama_pengirim', 'like', '%' . $search . '%')
                        //   -> orWhere('nama_subjek', 'like', '%' . $search . '%')
                          -> orWhere('tanggal', 'like', '%' . $search . '%');
        });



    }
}
